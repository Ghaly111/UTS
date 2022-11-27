<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'homeView']);
Route::get('/contact', [BookController::class, 'contactView']);

Route::get('/bookDetail/{id}', [BookController::class, 'bookView']);

Route::get('/categorie/{id}', [BookController::class, 'getCategoryDetail']);


Route::get('/publisher', [PublisherController::class, 'getAllPublisher']);
Route::get('/publisher/detail/{id}', [PublisherController::class, 'getPublisherDetail']);

