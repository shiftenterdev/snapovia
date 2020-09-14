<?php


namespace App\QueryFilters;


class OrderId
{
    public function handle($query,$next)
    {
        $query->when(request('order_id'),function ($query){
            $query->where('order_id','LIKE','%'.request('order_id').'%');
        });

        return $next($query);
    }
}
