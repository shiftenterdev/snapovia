<?php


namespace App\QueryFilters;


class OrderStatus
{
    public function handle($query,$next)
    {
        $query->when(request('status'),function ($query){
            $query->where('status',request('status'));
        });

        return $next($query);
    }
}
