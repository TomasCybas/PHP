<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(User $user){
        if($user->isAdmin()){
            $messages  = $user->sentMessages()->get();
            return view('admin.messages.index', ['messages' => $messages]);
        } else{
            $groups = $user->groups()->with('messages')->get();
            return view('messages.index', ['groups' => $groups]);
        }
    }

    public function create(User $user){
        $groups = $user->taughtGroups()->get();
        return view('admin.messages.create', ['user' => $user, 'groups' => $groups]);
    }

    public function store(Request $request, User $user){
      /*  $this->validate($request, [

        ]);*/

        $message = new Message();
        $message->title = $request->title;
        $message->message = $request->message;
        $message->user_id = $user->id;
        $message->group_id = $request->group_id;
        $message->save();

        return redirect()->route('messages', $user);

    }

    public function show(Message $message){

        return view('messages.show', ['message' => $message]);
    }

    public function delete(Message $message){
        $message->delete();
        return redirect()->route('messages');
    }
}
