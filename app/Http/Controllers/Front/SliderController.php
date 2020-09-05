<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __invoke()
    {
        $sliders = Slider::where('status',1)
            ->get();
    }
}
