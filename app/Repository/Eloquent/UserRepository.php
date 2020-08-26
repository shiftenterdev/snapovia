<?php

namespace App\Repository\Eloquent;

use App\Repository\UserRepositoryInterface;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
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