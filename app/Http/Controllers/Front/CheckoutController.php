<?php

namespace App\Http\Controllers\Front;

use App\Events\OrderSubmitted;
use App\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\OrderProcessTrait;
use App\Http\Requests\OrderSubmitRequest;
use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;

class CheckoutController extends Controller
{

    use OrderProcessTrait;


    public function index()
    {
        if (!Cart::count()) {
            return redirect()->route('cart');
        }
        return view('front.checkout.index');
    }

    public function submit(OrderSubmitRequest $request)
    {
        $order = $this->processOrder($request);
        if ($order != null) {
            event(new OrderSubmitted($order));
            return view('front.checkout.success', compact('order'));
        }
        return redirect()->back()->with('error', 'Sorry your order cannot processed at this moment');

    }

    public function cart()
    {
        if (!Cart::check()) {
            Cart::create();
        }
        return view('front.checkout.cart');
    }

    public function submitWithPayment()
    {
        $quote = Cart::get();
        Stripe::setApiKey(env('STRIPE_SECRET'));
        session(['grand_amount' => $quote->grand_total_incl_tax]);
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [
                [
                    'price_data' => [
                        'currency'     => config('site.store.currency'),
                        'unit_amount'  => session('grand_amount'),
                        'product_data' => [
                            'name'        => config('app.name'),
                            'description' => 'Order Total Amount',
                            'images'      => [route('welcome') . '/snapovia.png'],
                        ],
                    ],
                    'quantity'   => 1,
                ],
            ],
            'locale'               => 'en',
            //'livemode'             => false,
            'mode'                 => 'payment',
            'success_url'          => route('checkout.success'),
            'cancel_url'           => route('checkout').'?payment=failed',
        ]);

        return view('user.payment.index', ['session_id' => $session->id]);
    }

    public function success(Request $request)
    {
        if (session('subscription_amount')) {
            Payment::create([
                'order_id'       => $request->order->id,
                'status'         => 'COMPLETE',
                'payment_method' => $request->order->payment_method,
                'amount'         => $request->order->grand_total_incl_vat,
            ]);
            session(['subscription_amount' => null]);
            return view('front.checkout.success');
        }
        return view('front.checkout.success');
    }
}
