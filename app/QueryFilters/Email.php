<?php


namespace App\QueryFilters;


class Email
{
    public function handle($query,$next)
    {
        $query->when(request('email'),function ($query){
            $query->where('email','LIKE','%'.request('email').'%');
        });

        return $next($query);
    }
}
