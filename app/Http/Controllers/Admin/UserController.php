<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('admin.user.index')->with([
            'users'=>$this->userRepository->paginate(20)
        ]);
    }
}
