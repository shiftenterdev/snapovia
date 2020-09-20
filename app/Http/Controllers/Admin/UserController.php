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

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {

    }

    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {

    }
}
