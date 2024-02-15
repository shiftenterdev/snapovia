<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscription::paginate(20);

        return view('admin.marketing.subscriber.index', compact('subscribers'));
    }
}
