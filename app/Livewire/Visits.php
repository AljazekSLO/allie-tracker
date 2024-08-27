<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Visits extends Component
{

    public $visits = "Slovenia";
    public $title;

    public function render()
    {
        return view('livewire.visits')->with([
            'author' => Auth::user()->name,
        ]);
    }
}
