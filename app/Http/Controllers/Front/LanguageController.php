<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function __invoke($lang)
    {
        session(['locale'=>$lang]);
        return redirect()->back();
    }
}