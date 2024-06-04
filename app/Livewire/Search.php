<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $search;
    public $searchResults = [];
    public function render()
    {
        return view('livewire.search');
    }

    public function search(){
        dd(123);
    }

    public function updatedSearch($property){
        dd(123);
    }
}
