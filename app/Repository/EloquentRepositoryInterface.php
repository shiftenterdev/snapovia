<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface EloquentRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model;


    /**
     * @param Model $model
     * @return Model|null
     */
    public function edit(Model $model): ?Model;

    /**
     * @param array $attributes
     * @return Model
     */
    public function update(array $attributes): bool;


    /**
     * @param Model $model
     * @return bool|null
     */
    public function destroy(Model $model): ?bool ;
}
