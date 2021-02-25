<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;

class ReplyController extends Controller
{

    public function build(){
      return $this->from('cloudways@cloudways.com')
      ->view('emails.CloudHosting.Product');
    }

    public function replyEmail(Request $request)
    {
        $input = $request->all();
        $data = [
          $subject = $request->subject,
          $email   = $request->email,
          $content = $request->content
        ]
        Mail::send('admin.contact.reply', $data,
          function($message){
	           $message
             ->to($data->email, 'ADMIN')
             ->repyTo('vocaoky290999@gmail.com', 'hello')
             ->subject($data->subject);
	       });
        Session::flash('flash_message', 'Send message successfully!');
        return view('admin.contact.contact');
    }
}
