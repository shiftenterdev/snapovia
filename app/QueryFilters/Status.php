<?php

namespace App\QueryFilters;


class Status
{
    public function handle($query,$next)
    {
        $query->when(request('status'),function ($query){
            $query->where('status',request('status'));
        });

        return $next($query);
    }
}
