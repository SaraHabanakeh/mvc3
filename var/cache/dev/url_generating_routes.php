<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
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
    'app_book' => [[], ['_controller' => 'App\\Controller\\BookController::book'], [], [['text', '/library/']], [], [], []],
    'book_new' => [[], ['_controller' => 'App\\Controller\\BookController::new'], [], [['text', '/library/create']], [], [], []],
    'show_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::showBook'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library']], [], [], []],
    'edit_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/edit']], [], [], []],
    'delete_book' => [['title'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/delete']], [], [], []],
    'show_books' => [[], ['_controller' => 'App\\Controller\\BookController::showAllBook'], [], [['text', '/api/library/books']], [], [], []],
    'book_by_isbn' => [['isbn'], ['_controller' => 'App\\Controller\\BookController::showBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'session_debug' => [[], ['_controller' => 'App\\Controller\\CardGameController::showSession'], [], [['text', '/session']], [], [], []],
    'session_delete' => [[], ['_controller' => 'App\\Controller\\CardGameController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'card_start' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'card_deck' => [[], ['_controller' => 'App\\Controller\\CardGameController::test'], [], [['text', '/card/deck']], [], [], []],
    'card_shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'card_draw' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], [], [['text', '/card/deck/draw']], [], [], []],
    'card_draw_number' => [['num'], ['_controller' => 'App\\Controller\\CardGameController::drawCardNum'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'pig_start' => [[], ['_controller' => 'App\\Controller\\DiceGameController::home'], [], [['text', '/game/pig']], [], [], []],
    'test_roll_dice' => [[], ['_controller' => 'App\\Controller\\DiceGameController::testRollDice'], [], [['text', '/game/pig/test/roll']], [], [], []],
    'test_roll_num_dices' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/roll']], [], [], []],
    'test_dicehand' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/dicehand']], [], [], []],
    'pig_init_get' => [[], ['_controller' => 'App\\Controller\\DiceGameController::init'], [], [['text', '/game/pig/init']], [], [], []],
    'pig_init_post' => [[], ['_controller' => 'App\\Controller\\DiceGameController::initCallback'], [], [['text', '/game/pig/init']], [], [], []],
    'pig_play' => [[], ['_controller' => 'App\\Controller\\DiceGameController::play'], [], [['text', '/game/pig/play']], [], [], []],
    'pig_roll' => [[], ['_controller' => 'App\\Controller\\DiceGameController::roll'], [], [['text', '/game/pig/roll']], [], [], []],
    'pig_save' => [[], ['_controller' => 'App\\Controller\\DiceGameController::save'], [], [['text', '/game/pig/save']], [], [], []],
    'me' => [[], ['_controller' => 'App\\Controller\\PresentationController::presentation'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\PresentationController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\PresentationController::report'], [], [['text', '/report']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\PresentationController::lucky'], [], [['text', '/lucky']], [], [], []],
    'code_metrics' => [[], ['_controller' => 'App\\Controller\\PresentationController::metrics'], [], [['text', '/metrics/']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\PresentationController::api'], [], [['text', '/api']], [], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'product_create' => [[], ['_controller' => 'App\\Controller\\ProductController::createProduct'], [], [['text', '/product/create']], [], [], []],
    'product_show_all' => [[], ['_controller' => 'App\\Controller\\ProductController::showAllProduct'], [], [['text', '/product/show']], [], [], []],
    'product_by_id' => [['id'], ['_controller' => 'App\\Controller\\ProductController::showProductById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/show']], [], [], []],
    'product_update' => [['id', 'value'], ['_controller' => 'App\\Controller\\ProductController::updateProduct'], [], [['variable', '/', '[^/]++', 'value', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/product/update']], [], [], []],
    'product_view_all' => [[], ['_controller' => 'App\\Controller\\ProductController::viewAllProduct'], [], [['text', '/product/view']], [], [], []],
    'product_view_minimum_value' => [['value'], ['_controller' => 'App\\Controller\\ProductController::viewProductWithMinimumValue'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/product/view']], [], [], []],
    'product_by_min_value' => [['value'], ['_controller' => 'App\\Controller\\ProductController::showProductByMinimumValue'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/product/show/min']], [], [], []],
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
    'App\Controller\BookController::book' => [[], ['_controller' => 'App\\Controller\\BookController::book'], [], [['text', '/library/']], [], [], []],
    'App\Controller\BookController::new' => [[], ['_controller' => 'App\\Controller\\BookController::new'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\BookController::showBook' => [['title'], ['_controller' => 'App\\Controller\\BookController::showBook'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library']], [], [], []],
    'App\Controller\BookController::edit' => [['title'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/edit']], [], [], []],
    'App\Controller\BookController::delete' => [['title'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'title', true], ['text', '/library/delete']], [], [], []],
    'App\Controller\BookController::showAllBook' => [[], ['_controller' => 'App\\Controller\\BookController::showAllBook'], [], [['text', '/api/library/books']], [], [], []],
    'App\Controller\BookController::showBookByIsbn' => [['isbn'], ['_controller' => 'App\\Controller\\BookController::showBookByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'App\Controller\CardGameController::showSession' => [[], ['_controller' => 'App\\Controller\\CardGameController::showSession'], [], [['text', '/session']], [], [], []],
    'App\Controller\CardGameController::deleteSession' => [[], ['_controller' => 'App\\Controller\\CardGameController::deleteSession'], [], [['text', '/session/delete']], [], [], []],
    'App\Controller\CardGameController::home' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'App\Controller\CardGameController::test' => [[], ['_controller' => 'App\\Controller\\CardGameController::test'], [], [['text', '/card/deck']], [], [], []],
    'App\Controller\CardGameController::shuffleDeck' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'App\Controller\CardGameController::drawCardDeck' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], [], [['text', '/card/deck/draw']], [], [], []],
    'App\Controller\CardGameController::drawCardNum' => [['num'], ['_controller' => 'App\\Controller\\CardGameController::drawCardNum'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'App\Controller\DiceGameController::home' => [[], ['_controller' => 'App\\Controller\\DiceGameController::home'], [], [['text', '/game/pig']], [], [], []],
    'App\Controller\DiceGameController::testRollDice' => [[], ['_controller' => 'App\\Controller\\DiceGameController::testRollDice'], [], [['text', '/game/pig/test/roll']], [], [], []],
    'App\Controller\DiceGameController::testRollDices' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/roll']], [], [], []],
    'App\Controller\DiceGameController::testDiceHand' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/dicehand']], [], [], []],
    'App\Controller\DiceGameController::init' => [[], ['_controller' => 'App\\Controller\\DiceGameController::init'], [], [['text', '/game/pig/init']], [], [], []],
    'App\Controller\DiceGameController::initCallback' => [[], ['_controller' => 'App\\Controller\\DiceGameController::initCallback'], [], [['text', '/game/pig/init']], [], [], []],
    'App\Controller\DiceGameController::play' => [[], ['_controller' => 'App\\Controller\\DiceGameController::play'], [], [['text', '/game/pig/play']], [], [], []],
    'App\Controller\DiceGameController::roll' => [[], ['_controller' => 'App\\Controller\\DiceGameController::roll'], [], [['text', '/game/pig/roll']], [], [], []],
    'App\Controller\DiceGameController::save' => [[], ['_controller' => 'App\\Controller\\DiceGameController::save'], [], [['text', '/game/pig/save']], [], [], []],
    'App\Controller\PresentationController::presentation' => [[], ['_controller' => 'App\\Controller\\PresentationController::presentation'], [], [['text', '/']], [], [], []],
    'App\Controller\PresentationController::about' => [[], ['_controller' => 'App\\Controller\\PresentationController::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\PresentationController::report' => [[], ['_controller' => 'App\\Controller\\PresentationController::report'], [], [['text', '/report']], [], [], []],
    'App\Controller\PresentationController::lucky' => [[], ['_controller' => 'App\\Controller\\PresentationController::lucky'], [], [['text', '/lucky']], [], [], []],
    'App\Controller\PresentationController::metrics' => [[], ['_controller' => 'App\\Controller\\PresentationController::metrics'], [], [['text', '/metrics/']], [], [], []],
    'App\Controller\PresentationController::api' => [[], ['_controller' => 'App\\Controller\\PresentationController::api'], [], [['text', '/api']], [], [], []],
    'App\Controller\ProductController::index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'App\Controller\ProductController::createProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::createProduct'], [], [['text', '/product/create']], [], [], []],
    'App\Controller\ProductController::showAllProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::showAllProduct'], [], [['text', '/product/show']], [], [], []],
    'App\Controller\ProductController::showProductById' => [['id'], ['_controller' => 'App\\Controller\\ProductController::showProductById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/show']], [], [], []],
    'App\Controller\ProductController::updateProduct' => [['id', 'value'], ['_controller' => 'App\\Controller\\ProductController::updateProduct'], [], [['variable', '/', '[^/]++', 'value', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/product/update']], [], [], []],
    'App\Controller\ProductController::viewAllProduct' => [[], ['_controller' => 'App\\Controller\\ProductController::viewAllProduct'], [], [['text', '/product/view']], [], [], []],
    'App\Controller\ProductController::viewProductWithMinimumValue' => [['value'], ['_controller' => 'App\\Controller\\ProductController::viewProductWithMinimumValue'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/product/view']], [], [], []],
    'App\Controller\ProductController::showProductByMinimumValue' => [['value'], ['_controller' => 'App\\Controller\\ProductController::showProductByMinimumValue'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/product/show/min']], [], [], []],
];
