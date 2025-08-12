<?php

namespace App\Livewire\Book;

use Livewire\Component;

class BooksPage extends Component
{
    public function render()
    {
        return view('livewire.book.books-page')->layout('livewire.layout.app', ['title' => 'Ritmiemde - Books']);
    }
}
