<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */

namespace App\Livewire\Front;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    protected array $updatesQueryString = ['search'];

    public function render()
    {
        $response = Product::search($this->search);

        return view('livewire.front.search', compact('response'));
    }
}
