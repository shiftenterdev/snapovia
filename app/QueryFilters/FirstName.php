<?php

namespace App\QueryFilters;


class FirstName
{
    public function handle($query,$next)
    {
        $query->when(request('first_name'),function ($query){
            $query->where('first_name',request('first_name'));
        });

        return $next($query);
    }
}
