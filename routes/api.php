<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SMSAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Trigger new user registered event
Route::post('/sms/events/new-user-registered', [SMSAPIController::class, 'triggerNewUserRegistered'])->name('sms.events.newUserRegistered');

// Trigger new order placed event
Route::post('/sms/events/new-order-placed', [SMSAPIController::class, 'triggerNewOrderPlaced'])->name('sms.events.newOrderPlaced');

// Define routes for other events as needed
