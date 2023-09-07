<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use App\Repository\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * UserRepository constructor.
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
