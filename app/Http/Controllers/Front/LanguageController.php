<?php


namespace App\Http\Controllers\Front;


class LanguageController extends \App\Http\Controllers\Controller
{
    public function __invoke($lang)
    {
        session(['locale'=>$lang]);
        return redirect()->back();
    }
}