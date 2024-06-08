<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardGraphic;

/**
 * Class CardHand
 *
 * Represents a hand of cards in a card game.
 */
class CardHand
{
    /**
     * @var Card[] An array to store the cards in the hand.
     */
    private array $cards = [];

    /**
     * Adds a card to the hand.
     *
     * @param Card $card The card to be added.
     * @return void
     */
    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    /**
     * Gets all the cards in the hand.
     *
     * @return Card[] An array of cards in the hand.
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Calculates the total value of the cards in the hand.
     *
     * @return int The total value of the cards.
     */
    public function totalValue(): int
    {
        $value = 0;
        $aces = 0;

        foreach ($this->cards as $card) {
            $cardValue = $card->cardValue();
            if ($cardValue == 1) {
                $aces += 1;
            }
            $value += $cardValue;
        }

        while ($aces > 0 && $value <= 11) {
            $value += 10;
            $aces -= 1;
        }

        return $value;
    }

    /**
     * Converts the hand of cards to an array representation.
     *
     * @return array<int, array{suit: string, value: int, string_representation: string}> Array of cards with their properties.
     */
    public function toArray(): array
    {
        $cardsArray = [];
        foreach ($this->cards as $card) {
            $cardsArray[] = [
                'suit' => $card->getSuit(),
                'value' => $card->getValue(),
                'string_representation' => $card->getAsString()
            ];
        }

        return $cardsArray;
    }

}
