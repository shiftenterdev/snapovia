<?php

namespace App\Repository;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;
//    public function find($count): Collection;
    public function paginate($count): LengthAwarePaginator;
}