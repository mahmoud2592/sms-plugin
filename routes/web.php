<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSPluginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('/settings/save', 'SettingsController@save')->name('settings.save');
// Show the settings page
Route::get('/sms/settings', [SMSPluginController::class, 'showSettingsPage'])->name('sms.settings');

// Save the settings
Route::post('/sms/settings/save', [SMSPluginController::class, 'saveSettings'])->name('sms.settings.save');
