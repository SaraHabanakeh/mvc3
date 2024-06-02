<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api-quote' => [[], ['_controller' => 'App\\Controller\\ApiController::getDailyQuote'], [], [['text', '/api/quote']], [], [], []],
    'api-deck' => [[], ['_controller' => 'App\\Controller\\ApiController::getDeck'], [], [['text', '/api/deck']], [], [], []],
    'api-shuffle' => [[], ['_controller' => 'App\\Controller\\ApiController::getShuffleCards'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_draw_cards' => [['number'], ['_controller' => 'App\\Controller\\ApiController::drawCards'], [], [['variable', '/', '[^/]++', 'number', true], ['text', '/api/deck/draw']], [], [], []],
    'api_game' => [[], ['_controller' => 'App\\Controller\\ApiController::apiGame'], [], [['text', '/api/game']], [], [], []],
    'game_reset' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::reset'], [], [['text', '/game/reset']], [], [], []],
    'game-page' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::home'], [], [['text', '/game/']], [], [], []],
    'game-doc' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::doc'], [], [['text', '/game/doc']], [], [], []],
    'game_setup' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::setup'], [], [['text', '/setup']], [], [], []],
    'game_start' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::start'], [], [['text', '/start']], [], [], []],
    'game_hit' => [['playerIndex'], ['_controller' => 'App\\Controller\\BlackJackGame::hit'], [], [['variable', '/', '[^/]++', 'playerIndex', true], ['text', '/hit']], [], [], []],
    'game_stay' => [['playerIndex'], ['_controller' => 'App\\Controller\\BlackJackGame::stay'], [], [['variable', '/', '[^/]++', 'playerIndex', true], ['text', '/stay']], [], [], []],
    'game_dealer' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::dealer'], [], [['text', '/dealer']], [], [], []],
    'app_book' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/library/']], [], [], []],
    'book_new' => [[], ['_controller' => 'App\\Controller\\BookController::create'], [], [['text', '/library/create']], [], [], []],
    'show_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::show'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library']], [], [], []],
    'edit_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/edit']], [], [], []],
    'delete_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/delete']], [], [], []],
    'show_books' => [[], ['_controller' => 'App\\Controller\\BookController::apiIndex'], [], [['text', '/api/library/books']], [], [], []],
    'book_by_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\BookController::apiShow'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'session_debug' => [[], ['_controller' => 'App\\Controller\\CardGameController::showSession'], [], [['text', '/session']], [], [], []],
    'session_delete' => [[], ['_controller' => 'App\\Controller\\CardGameController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'card_start' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'card_deck' => [[], ['_controller' => 'App\\Controller\\CardGameController::showDeck'], [], [['text', '/card/deck']], [], [], []],
    'card_shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'card_draw' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], [], [['text', '/card/deck/draw']], [], [], []],
    'card_draw_number' => [['num'], ['_controller' => 'App\\Controller\\CardGameController::drawMultipleCards'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'me' => [[], ['_controller' => 'App\\Controller\\PresentationController::presentation'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\PresentationController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\PresentationController::report'], [], [['text', '/report']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\PresentationController::lucky'], [], [['text', '/lucky']], [], [], []],
    'code_metrics' => [[], ['_controller' => 'App\\Controller\\PresentationController::metrics'], [], [['text', '/metrics/']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\PresentationController::api'], [], [['text', '/api']], [], [], []],
    'App\Controller\ApiController::getDailyQuote' => [[], ['_controller' => 'App\\Controller\\ApiController::getDailyQuote'], [], [['text', '/api/quote']], [], [], []],
    'App\Controller\ApiController::getDeck' => [[], ['_controller' => 'App\\Controller\\ApiController::getDeck'], [], [['text', '/api/deck']], [], [], []],
    'App\Controller\ApiController::getShuffleCards' => [[], ['_controller' => 'App\\Controller\\ApiController::getShuffleCards'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'App\Controller\ApiController::drawCards' => [['number'], ['_controller' => 'App\\Controller\\ApiController::drawCards'], [], [['variable', '/', '[^/]++', 'number', true], ['text', '/api/deck/draw']], [], [], []],
    'App\Controller\ApiController::apiGame' => [[], ['_controller' => 'App\\Controller\\ApiController::apiGame'], [], [['text', '/api/game']], [], [], []],
    'App\Controller\BlackJackGame::reset' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::reset'], [], [['text', '/game/reset']], [], [], []],
    'App\Controller\BlackJackGame::home' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::home'], [], [['text', '/game/']], [], [], []],
    'App\Controller\BlackJackGame::doc' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::doc'], [], [['text', '/game/doc']], [], [], []],
    'App\Controller\BlackJackGame::setup' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::setup'], [], [['text', '/setup']], [], [], []],
    'App\Controller\BlackJackGame::start' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::start'], [], [['text', '/start']], [], [], []],
    'App\Controller\BlackJackGame::hit' => [['playerIndex'], ['_controller' => 'App\\Controller\\BlackJackGame::hit'], [], [['variable', '/', '[^/]++', 'playerIndex', true], ['text', '/hit']], [], [], []],
    'App\Controller\BlackJackGame::stay' => [['playerIndex'], ['_controller' => 'App\\Controller\\BlackJackGame::stay'], [], [['variable', '/', '[^/]++', 'playerIndex', true], ['text', '/stay']], [], [], []],
    'App\Controller\BlackJackGame::dealer' => [[], ['_controller' => 'App\\Controller\\BlackJackGame::dealer'], [], [['text', '/dealer']], [], [], []],
    'App\Controller\BookController::index' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/library/']], [], [], []],
    'App\Controller\BookController::create' => [[], ['_controller' => 'App\\Controller\\BookController::create'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\BookController::show' => [['title'], ['_controller' => 'App\\Controller\\BookController::show'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library']], [], [], []],
    'App\Controller\BookController::edit' => [['title'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/edit']], [], [], []],
    'App\Controller\BookController::delete' => [['title'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/delete']], [], [], []],
    'App\Controller\BookController::apiIndex' => [[], ['_controller' => 'App\\Controller\\BookController::apiIndex'], [], [['text', '/api/library/books']], [], [], []],
    'App\Controller\BookController::apiShow' => [['isbn'], ['_controller' => 'App\\Controller\\BookController::apiShow'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'App\Controller\CardGameController::showSession' => [[], ['_controller' => 'App\\Controller\\CardGameController::showSession'], [], [['text', '/session']], [], [], []],
    'App\Controller\CardGameController::deleteSession' => [[], ['_controller' => 'App\\Controller\\CardGameController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'App\Controller\CardGameController::home' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'App\Controller\CardGameController::showDeck' => [[], ['_controller' => 'App\\Controller\\CardGameController::showDeck'], [], [['text', '/card/deck']], [], [], []],
    'App\Controller\CardGameController::shuffleDeck' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'App\Controller\CardGameController::drawCardDeck' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], [], [['text', '/card/deck/draw']], [], [], []],
    'App\Controller\CardGameController::drawMultipleCards' => [['num'], ['_controller' => 'App\\Controller\\CardGameController::drawMultipleCards'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'App\Controller\PresentationController::presentation' => [[], ['_controller' => 'App\\Controller\\PresentationController::presentation'], [], [['text', '/']], [], [], []],
    'App\Controller\PresentationController::about' => [[], ['_controller' => 'App\\Controller\\PresentationController::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\PresentationController::report' => [[], ['_controller' => 'App\\Controller\\PresentationController::report'], [], [['text', '/report']], [], [], []],
    'App\Controller\PresentationController::lucky' => [[], ['_controller' => 'App\\Controller\\PresentationController::lucky'], [], [['text', '/lucky']], [], [], []],
    'App\Controller\PresentationController::metrics' => [[], ['_controller' => 'App\\Controller\\PresentationController::metrics'], [], [['text', '/metrics/']], [], [], []],
    'App\Controller\PresentationController::api' => [[], ['_controller' => 'App\\Controller\\PresentationController::api'], [], [['text', '/api']], [], [], []],
];
