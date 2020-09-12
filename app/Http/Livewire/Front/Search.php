<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */
namespace App\Http\Livewire\Front;

use Livewire\Component;

class Search extends Component
{
    public $search = '';

    protected $updatesQueryString = ['search'];

    public function render()
    {
        $response = \App\Models\Product::search($this->search);
        return view('livewire.front.search',compact('response'));
    }
}
