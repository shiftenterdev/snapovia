<?php


namespace App\QueryFilters;


class LastName
{
    public function handle($query,$next)
    {
        $query->when(request('last_name'),function ($query){
            $query->where('last_name',request('last_name'));
        });

        return $next($query);
    }
}
