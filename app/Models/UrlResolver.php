<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrlResolver extends Model
{
    protected $guarded = [];

    public function scopeRedirect($query,$url_key)
    {
        $entity = $query->where('url_key',$url_key)->firstOrFail();
        return $entity->entity_type;
    }
}
