<?php

namespace App\Models;

use App\QueryFilters\Email;
use App\QueryFilters\FirstName;
use App\QueryFilters\LastName;
use App\QueryFilters\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Customer extends Model
{
    protected $paginateCount = 15;

    public function scopeGrid($query)
    {
        return app(Pipeline::class)
            ->send($query)
            ->through([
                Status::class,
                FirstName::class,
                LastName::class,
                Email::class,
            ])
            ->thenReturn()
            ->paginate($this->paginateCount);
    }

    public function address()
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
