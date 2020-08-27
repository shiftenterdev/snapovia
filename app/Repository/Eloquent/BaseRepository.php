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
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * @param $count
     * @return LengthAwarePaginator|null
     */
    public function paginate($count): ?LengthAwarePaginator
    {
        return $this->model->paginate($count);
    }

    /**
     * @param Model $model
     * @return Model|null
     */
    public function edit(Model $model): ?Model
    {
        return $this->model;
    }

    /**
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes): bool
    {
        return $this->model->update($attributes);
    }

    /**
     * @param Model $model
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(Model $model): ?bool
    {
        return $this->model->delete();
    }
}
