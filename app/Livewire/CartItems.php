<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CartItem;

class CartItems extends Component
{
    public $items = [];

    protected $listeners = ['cartUpdated' => 'loadCartItems'];

    public function mount()
    {
        $this->loadCartItems();
    }

    public function loadCartItems()
    {
        $this->items = CartItem::where('user_id', auth()->id())->with('product')->get();
    }

    public function removeFromCart($itemId)
    {
        CartItem::find($itemId)->delete();
        $this->loadCartItems();
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-items');
    }
}