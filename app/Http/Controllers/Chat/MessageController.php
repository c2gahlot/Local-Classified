<?php
namespace App\Http\Controllers\Chat;

use App\User;
use Illuminate\Http\Request;
use Nahid\Talk\Facades\Talk;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    protected $authUser;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chatHistory($id)
    {
        Talk::setAuthUserId(auth()->user()->id);
        View::composer('chat.partials.peoplelist', function($view) {
            $threads = Talk::threads();
            $view->with(compact('threads'));
        });

        $conversations = Talk::getMessagesByUserId($id, 0, 5);
        $user = '';
        $messages = [];
        if(!$conversations) {
            $user = User::find($id);
        } else {
            $user = $conversations->withUser;
            $messages = $conversations->messages;
        }
        return view('chat.conversation', compact('messages', 'user'));
    }
    public function ajaxSendMessage(Request $request)
    {
        Talk::setAuthUserId(auth()->user()->id);
        View::composer('chat.partials.peoplelist', function($view) {
            $threads = Talk::threads();
            $view->with(compact('threads'));
        });

        if ($request->ajax()) {
            $rules = [
                'message-data'=>'required',
                '_id'=>'required'
            ];
            $this->validate($request, $rules);
            $body = $request->input('message-data');
            $userId = $request->input('_id');
            if ($message = Talk::sendMessageByUserId($userId, $body)) {
                $html = view('chat.new_message', compact('message'))->render();
                return response()->json(['status'=>'success', 'html'=>$html], 200);
            }
        }
    }
    public function ajaxDeleteMessage(Request $request, $id)
    {
        Talk::setAuthUserId(auth()->user()->id);
        View::composer('chat.partials.peoplelist', function($view) {
            $threads = Talk::threads();
            $view->with(compact('threads'));
        });

        if ($request->ajax()) {
            if(Talk::deleteMessage($id)) {
                return response()->json(['status'=>'success'], 200);
            }
            return response()->json(['status'=>'errors', 'msg'=>'something went wrong'], 401);
        }
    }

}