<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::get();
        return view('admin.message.index', compact('messages'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:4|max:255',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        try {
            $messages = new Message;
            $messages->name = $request->name;
            $messages->email = $request->email;
            $messages->subject = $request->subject;
            $messages->message = $request->message;
            $messages->save();

            return redirect()->back()->with('success', 'Message Send Successfully');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Message Delivered fail');
        }
    }


    public function destroy($id){

        $messages = Message::find($id);
        $messages->delete();
        return Redirect()->back()->with("success", "Message Deleted Successfully");
    }
}
