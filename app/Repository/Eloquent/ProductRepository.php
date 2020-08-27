<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use App\Repository\UserRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param $count
     * @return LengthAwarePaginator
     */
    public function paginate($count): LengthAwarePaginator
    {
        return $this->model->paginate($count);
    }
}
