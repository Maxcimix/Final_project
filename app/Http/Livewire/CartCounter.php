<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.cart-counter');
    }
}