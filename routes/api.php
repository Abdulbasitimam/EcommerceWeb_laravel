<?php


use App\Http\Controllers\Api\ContactController;

Route::get('/contact', [ContactController::class, 'getContactInfo']);
Route::post('/contact', [ContactController::class, 'submitContactForm']);

