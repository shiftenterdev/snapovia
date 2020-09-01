<?php

namespace App\Http\Livewire\Front;

use App\Facades\Cart;
use Livewire\Component;

class MiniCart extends Component
{
    public $cart;
    public $quantity;

    protected $listeners = ['updateMiniCart'];

    public function mount()
    {
        $this->cart = Cart::get();
    }

    public function render()
    {
        return view('livewire.front.mini-cart');
    }

    public function updateMiniCart()
    {
        $this->cart = Cart::get();
        $this->dispatchBrowserEvent('cart-updated', ['count' => Cart::count()]);
    }

    public function removeFromCart($sku)
    {
        Cart::removeFromCart($sku);
        $this->updateMiniCart();
    }

    public function updateQty($sku,$qty)
    {
        Cart::updateQty($sku,$qty);
        $this->updateMiniCart();
    }
}
