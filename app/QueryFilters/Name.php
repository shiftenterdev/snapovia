<?php


namespace App\QueryFilters;


class Name
{
    public function handle($query,$next)
    {
        $query->when(request('name'),function ($query){
            $query->where('name','LIKE','%'.request('name').'%');
        });

        return $next($query);
    }
}
