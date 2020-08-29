<?php


namespace App\QueryFilters;


class UrlKey
{
    public function handle($query,$next)
    {
        $query->when(request('url_key'),function ($query){
            $query->where('url_key',request('url_key'));
        });

        return $next($query);
    }
}
