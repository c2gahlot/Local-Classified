<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Nahid\Talk\Conversations\Conversation;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversationUsers = Conversation::with('userone', 'usertwo')
            ->where('user_one', auth()->user()->id)
            ->orWhere('user_two', auth()->user()->id)
            ->get();

        $allConversationUsers = [];

        foreach($conversationUsers as $conversationUser){
            array_push($allConversationUsers, $conversationUser->user_one);
            array_push($allConversationUsers, $conversationUser->user_two);
        }

        $allConversationUsers = array_unique($allConversationUsers);

        if (($key = array_search(auth()->user()->id, $allConversationUsers)) !== false) {
            unset($allConversationUsers[$key]);
        }

        $users = User::wherein('id', $allConversationUsers)->get();

        return view('chat.index', compact('users'));
    }

}
