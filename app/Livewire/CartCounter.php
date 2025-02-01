<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CartItem;

class CartItems extends Component
{
    public $items = [];

    public function mount()
    {
        // Aquí obtenemos los items del carrito del usuario actual
        $this->items = CartItem::where('user_id', auth()->id())->get();
    }

    public function removeFromCart($itemId)
    {
        CartItem::find($itemId)->delete();
        $this->items = CartItem::where('user_id', auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.cart-items');
    }
}