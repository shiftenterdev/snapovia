<?php

namespace App\Http\Controllers\Front;

use App\Facades\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderSubmitRequest;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::get();
        if (!Cart::check() || !count($cart->items)) {
            return redirect()->route('cart');
        }
        return view('front.checkout.index', compact('cart'));
    }

    public function submit(OrderSubmitRequest $request)
    {
        try {

            DB::beginTransaction();

            $order = Cart::toOrder();

            $order->shipping()->create([
                'first_name'     => $request->shipping['first_name'],
                'last_name'      => $request->shipping['last_name'],
                //                'email'          => $request->shipping['email'],
                'address_line_1' => $request->shipping['address_line_1'],
                'address_line_2' => $request->shipping['address_line_2'],
                'city'           => $request->shipping['city'],
                'country'        => $request->shipping['country'],
                'telephone'      => $request->shipping['mobile'],
                'postcode'       => $request->shipping['postcode'],
            ]);

            if (!$request->save_this_address) {

                $order->billing()->create([
                    'first_name'     => $request->shipping['first_name'],
                    'last_name'      => $request->shipping['last_name'],
                    'address_line_1' => $request->shipping['address_line_1'],
                    'address_line_2' => $request->shipping['address_line_2'],
                    'city'           => $request->shipping['city'],
                    'country'        => $request->shipping['country'],
                    'telephone'      => $request->shipping['mobile'],
                    'postcode'       => $request->shipping['postcode'],
                ]);

            } else {

                $order->billing()->create([
                    'first_name'     => $request->billing['first_name'],
                    'last_name'      => $request->billing['last_name'],
                    'address_line_1' => $request->billing['address_line_1'],
                    'address_line_2' => $request->billing['address_line_2'],
                    'city'           => $request->billing['city'],
                    'country'        => $request->billing['country'],
                    'telephone'      => $request->billing['mobile'],
                    'postcode'       => $request->billing['postcode'],
                ]);

            }

            $shipping_amount = $this->getShipping($request->shipping_method);

            if ($shipping_amount) {
                $order->update([
                    'shipping_amount'          => $shipping_amount,
                    'shipping_amount_incl_tax' => $shipping_amount * shipping_tax_balance(),
                    'grand_total'              => $order->grand_total + $shipping_amount * shipping_tax_balance(),
                    'grand_total_incl_tax'         => $order->grand_total + $shipping_amount * shipping_tax_balance(),
                ]);
            }

            DB::commit();

            if ($order) {
                return view('front.checkout.success', compact('order'));
            }
            return redirect()->back()->with('error', __('Order cannot complete at this moment'));
        } catch (\Exception $exception) {
            DB::rollBack();
            logger($exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    private function getShipping($shipping)
    {
        switch ($shipping){
            case 'Standard Shipping':
                return 800;
            case 'Express Shipping':
                return 1200;
            default:
                return 0;
        }
    }

    public function cart()
    {
        if (!Cart::check()) {
            Cart::create();
        }
        return view('front.checkout.cart');
    }

    public function success()
    {
        return view('front.checkout.success');
    }
}
