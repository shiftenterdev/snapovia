<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

interface CartRepositoryInterface
{
    public function add():Model;

    public function remove():Model;
}