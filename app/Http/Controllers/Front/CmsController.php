<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function contact()
    {
        return view('front.cms-page.contact');
    }

    public function faq()
    {
        return view('front.cms-page.faq');
    }

    public function shippingReturns()
    {
        return view('front.cms-page.shipping-and-returns');
    }

    public function aboutUs()
    {
        return view('front.cms-page.about-us');
    }

    public function career()
    {
        return view('front.cms-page.career');
    }

    public function terms()
    {
        return view('front.cms-page.terms');
    }

    public function privacy()
    {
        return view('front.cms-page.privacy-policy');
    }
}
