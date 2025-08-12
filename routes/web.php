<?php

use App\Livewire\Book\BooksPage;
use App\Livewire\Home\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');
Route::get('/books', BooksPage::class)->name('books');
Route::get('/categories', BooksPage::class)->name('categories');
Route::get('/genres', BooksPage::class)->name('genres');
Route::get('/support', BooksPage::class)->name('support');

