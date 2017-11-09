<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers\Auth
 */
class UserController extends Controller
{

    /**
     * @var UserRepository
     */
    public $userRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * Show Advertisement Details.
     *
     * @return mixed
     */
    public function ads()
    {

        $advertisements = $this->userRepository->findAds();

        return view('auth.ads', compact('advertisements'));
    }

}
