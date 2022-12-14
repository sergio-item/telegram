<?php

/*
|--------------------------------------------------------------------------
| Telegram Routes
|--------------------------------------------------------------------------
|
| To check if is Laravel or Lumen you can check the application instance namespace
| Laravel is \Illuminate\Foundation\Application, Lumen \Laravel\Lumen\Application
| You can get the app instance and check it
|
*/

if (app() instanceof \Illuminate\Foundation\Application) {
    // Laravel
    Route::post('/' . trim(config('telegram.manage_webhook_url'), '/'), ['as' => 'telegram-manage-webhook', 'uses' => 'SergioItem\Telegram\Http\Controllers\TelegramController@manageWebhook']);
} else {
    // Lumen
    Route::post('/' . trim(config('telegram.manage_webhook_url'), '/'), ['as' => 'telegram-manage-webhook', 'uses' => 'SergioItem\Telegram\Http\Controllers\TelegramLumenController@manageWebhook']);
}