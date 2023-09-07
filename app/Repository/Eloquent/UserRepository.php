<?php

namespace App\Repository\Eloquent;

use App\Repository\UserRepositoryInterface;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
