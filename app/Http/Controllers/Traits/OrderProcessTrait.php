<?php

namespace App\Http\Controllers\Traits;

use App\Facades\Cart;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait OrderProcessTrait
{
    protected function processOrder(Request $request)
    {
        try {
            DB::beginTransaction();

            $order = Cart::toOrder();

            $order->shipping()->create([
                'first_name'     => $request->shipping['first_name'],
                'last_name'      => $request->shipping['last_name'],
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

            $shipping_amount = $this->getShipping($request->shipping_method_id);

            $tax = config('site.sales.tax');

            if ($shipping_amount) {
                $order->update([
                    'shipping_amount'          => $shipping_amount,
                    'shipping_amount_incl_tax' => $shipping_amount + $shipping_amount / 100 * $tax,
                    'grand_total'              => $order->grand_total + $shipping_amount + $shipping_amount / 100 * $tax,
                    'grand_total_incl_tax'     => $order->grand_total + $shipping_amount + $shipping_amount / 100 * $tax,
                ]);
            }

            DB::commit();
            return $order;
        } catch (\Exception $exception) {
            DB::rollBack();
            logger($exception->getMessage());
            return null;
        }
    }

    private function getShipping($shipping_id)
    {
        return Shipping::find($shipping_id)->amount;
    }
}
