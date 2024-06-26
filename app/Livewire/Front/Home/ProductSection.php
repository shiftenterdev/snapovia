<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Livewire\Front\Home;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductSection extends Component
{
    public function render()
    {
        $women = cache()->remember('home-product', 60 * 60, function () {
            return Product::with('categories')->home();
        });
        $men = $women;
        $gadget = $women;

        return view('livewire.front.home.product-section')
            ->with(compact('women', 'men', 'gadget'));
    }

    public function addToCart($sku)
    {
        Cart::addToCart($sku);
        $this->emit('updateMiniCart');
        $this->dispatchBrowserEvent('remove-cart-notification');
        session()->flash('success', 'Product added to cart 😀');
    }
}
