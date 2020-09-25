<?php

namespace App\Http\Controllers;

use App\GuestModel;
use http\Env\Response;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function guest(){

        $comments = new GuestModel();
//        dd($comments->all());
        return view('guestbook', ['comments' => $comments->all()]);
    }
    public function guestbook_comment(Request $request){
//       dd($request);
        $valid = $request->validate([
            'name' => 'required|min:3|max:30',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:3|max:500'
        ]);
        $comment = new GuestModel();
        $comment->name = $request->input('name');
        $comment->subject = $request->input('subject');
        $comment->message = $request->input('message');
        $comment->save();



        //return response()->json(['result' => $comment],200);
        return redirect()->route('guestbook');

    }
}
