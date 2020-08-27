<?php

namespace App\Repository\Eloquent;

use App\Models\Quote;
use App\Repository\CartRepositoryInterface;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    /**
     * CartRepository constructor.
     *
     * @param Quote $model
     */
    public function __construct(Quote $model)
    {
        parent::__construct($model);
    }

    public function add(array $attributes): Quote
    {
        return $this->model->items()->create($attributes);
    }

    public function remove($item_id): Quote
    {
        // TODO: Implement remove() method.
    }

    public function updateQty(array $attributes): Quote
    {
        return $this->model->items()->update($attributes);
    }
}
