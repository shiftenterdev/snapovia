<?php

namespace App\QueryFilters;


class EntityId
{
    public function handle($query,$next)
    {
        $query->when(request('entity_id'),function ($query){
            $query->where('id',request('entity_id'));
        });

        return $next($query);
    }
}
