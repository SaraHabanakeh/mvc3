<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\Player;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use App\Entity\Book;
use App\Entity\AddBook;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use LogicException;

/**
 * Controller for managing API endpoints for various functionalities.
 */
class ApiController
{
    /**
     * Get a random daily quote.
     *
     * @Route("/api/quote", name="api-quote")
     *
     * @return Response
     */
    #[Route("/api/quote", name: "api-quote")]
    public function getDailyQuote(): Response
    {
        $quotes = [
            "You can't go back and change the beginning, but you can start where you are and change the ending. - C.S. Lewis",
            "Nothing is impossible, the word itself says 'I'm possible'! - Audrey Hepburn",
            "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        ];

        $randomIndex = array_rand($quotes);
        $quote = $quotes[$randomIndex];

        $data = [
            'quote' => $quote,
            'date' => date('Y-m-d'),
            'timestamp' => time()
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * Get a sorted deck of cards.
     *
     * @Route("/api/deck", name="api-deck")
     *
     * @return JsonResponse
     */
    #[Route("/api/deck", name:"api-deck")]
    public function getDeck(): JsonResponse
    {
        $deck = new DeckOfCards();
        $sortedDeck = $deck->getSortedCards();

        $rows = array_chunk($sortedDeck, 13, true);

        return new JsonResponse($rows, JsonResponse::HTTP_OK);
    }

    /**
     * Shuffle the deck of cards and store it in the session.
     *
     * @Route("/api/deck/shuffle", name="api-shuffle", methods={"POST", "GET"})
     *
     * @param Request $request The HTTP request object.
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     *
     * @throws LogicException If JSON encoding fails.
     */

    #[Route("/api/deck/shuffle", name:"api-shuffle", methods: ['POST', 'GET'])]
    public function getShuffleCards(Request $request, SessionInterface $session): Response
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $shuffledCards = $deck->getSortedCards();

        $representations = [];
        foreach ($shuffledCards as $suit => $cards) {
            foreach ($cards as $value => $representation) {
                $representations[] = $representation;
            }
        }

        $session->set('shuffled_deck', $representations);

        $shuffledDeckArray = $session->get('shuffled_deck', []);
        $jsonString = json_encode($shuffledDeckArray, JSON_UNESCAPED_UNICODE);

        if ($jsonString === false) {
            throw new LogicException('Failed to encode JSON.');
        }

        return new Response($jsonString, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }

    /**
     * Draw a specified number of cards from the deck.
     *
     * @Route("/api/deck/draw/{number}", name="api_draw_cards", methods={"POST", "GET"})
     *
     * @param Request $request The HTTP request object.
     * @param SessionInterface $session The session interface.
     * @param int $number The number of cards to draw.
     *
     * @return Response
     *
     * @throws LogicException If session data is corrupted or JSON encoding fails.
     */
    #[Route("/api/deck/draw/{number}", name: "api_draw_cards", methods: ['POST', 'GET'])]
    public function drawCards(Request $request, SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', new DeckOfCards());
        $hand = $session->get('hand', new CardHand());

        if (!$deck instanceof DeckOfCards || !$hand instanceof CardHand) {
            throw new LogicException('Session data is corrupted.');
        }

        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
            $drawnCard = $deck->drawCard();
            if ($drawnCard !== null) {
                $hand->addCard($drawnCard);
                $drawnCards[] = $drawnCard;
            } else {
                break;
            }
        }

        $session->set('deck', $deck);
        $session->set('hand', $hand);
        $cardsRemaining = count($deck->getCards());

        $drawnCardsRepresentations = [];
        foreach ($drawnCards as $card) {
            $drawnCardsRepresentations[] = $card->getAsString();
        }

        $data = [
            'drawnCards' => $drawnCardsRepresentations,
            'cardsRemaining' => $cardsRemaining,
        ];

        $jsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
        if ($jsonString === false) {
            throw new LogicException('Failed to encode JSON.');
        }

        return new Response($jsonString, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }

    /**
     * Get the current state of the game, including players and bank data.
     *
     * @Route("/api/game", name="api_game")
     *
     * @param SessionInterface $session The session interface.
     *
     * @return JsonResponse
     */

    #[Route("/api/game", name: "api_game")]
    public function apiGame(SessionInterface $session): JsonResponse
    {
        $deck = $session->get('deck');
        $players = $session->get('players');
        $bank = $session->get('bank');

        $playersData = [];
        foreach ($players as $player) {
            if ($player instanceof Player) {
                $playersData[] = [
                    'name' => $player->getName(),
                    'balance' => $player->getBalance(),
                    'total hand value' => $player->getHand(),
                    'status' => $player->getStatus(),
                ];
            }
        }

        $bankData = [
            'name' => $bank->getName(),
            'balance' => $bank->getBalance(),
            'total hand value' => $bank->getHandValue(),
            'status' => $bank->getStatus(),
        ];

        $data = [
            'players' => $playersData,
            'bank' => $bankData,
        ];

        return new JsonResponse($data);
    }

}
