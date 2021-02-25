<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends Controller
{
    public function __construct(Contact $contact){
      $this->contact = $contact;
    }
    public function index(){
      $contact = $this->contact->getContact();
      return view('admin.contact.index',compact('contact'));
    }

    public function reply($id){
      $contact = $this->contact->getReply($id);
      return view('admin.contact.reply', compact('contact'));
    }

    public function postContact(Request $request){
      $mes = $request->message;
      $name = $request->name;
      $email = $request->email;
      $subject = $request->subject;

      $data = [
        'fullname'=>$name,
        'email'=>$email,
        'subject'=>$subject,
        'content'=>$mes
      ];
      $result = $this->contact->addContact($data);
      if($result){
        return redirect()
        ->route('cnew.contact.contact');
      }else{
        return redirect()
        ->route('cnew.contact.contact')
        ->with('msg','Error!!');
      }
    }

}
