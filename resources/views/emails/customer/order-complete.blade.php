@component('mail::message')
# Hi, {{$order->shipping->first_name}}

## Your order(#{{$order->order_id}}) processed successfully.

### Shipping Information
{{$order->shipping->first_name.' '.$order->shipping->last_name}},\
{{$order->shipping->address_line_1}},\
{{$order->shipping->city}}\
{{$order->shipping->country}},{{$order->shipping->postcode}}\
T:{{$order->shipping->telephone}}

### Billing Information
{{$order->billing->first_name.' '.$order->billing->last_name}},\
{{$order->billing->address_line_1}},\
{{$order->billing->city}}\
{{$order->billing->country}},{{$order->billing->postcode}}\
T:{{$order->billing->telephone}}

@component('mail::table')
| Item       |   Sku   | Qty         |Unit Price| Row total  |
| ---------- |:-------:| -----------:|:---------|:-----------|
@foreach($order->items as $item)
| {{$item->name}} | {{$item->sku}} | {{$item->qty}} | {{$item->price}} | {{$item->price * $item->qty}} |
@endforeach
|      |  |       | Sub total   | $100 |
|      |  |       | Tax         |   $0 |
|      |  |       | Grand total | $200 |
@endcomponent

@if($order->notes)
@component('mail::panel')
Note: {{$order->notes}}
@endcomponent
@endif

You will be notified futher progress by email.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
