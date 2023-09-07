<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 */
interface EloquentRepositoryInterface
{
    public function create(array $attributes): Model;

    /**
     * @return Model
     */
    public function find($id): ?Model;

    public function edit(Model $model): ?Model;

    /**
     * @return Model
     */
    public function update(array $attributes): bool;

    public function destroy(Model $model): ?bool;
}
