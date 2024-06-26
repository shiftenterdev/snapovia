<?php

namespace App\Repository;

use App\Models\Quote;

interface CartRepositoryInterface
{
    public function add(array $attributes): Quote;

    public function remove($item_id): Quote;

    public function updateQty(array $attributes): Quote;
}
