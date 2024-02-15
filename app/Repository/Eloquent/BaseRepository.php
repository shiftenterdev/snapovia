<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function paginate($count): ?LengthAwarePaginator
    {
        return $this->model->paginate($count);
    }

    public function edit(Model $model): ?Model
    {
        return $this->model;
    }

    public function update(array $attributes): bool
    {
        return $this->model->update($attributes);
    }

    /**
     * @throws \Exception
     */
    public function destroy(Model $model): ?bool
    {
        return $this->model->delete();
    }
}
