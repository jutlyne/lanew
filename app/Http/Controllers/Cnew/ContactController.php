<?php

namespace App\Http\Controllers\Cnew;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends Controller
{

  public function __construct(Contact $contact){
    $this->contact = $contact;
  }

  public function contact(){
    return view('cnew.contact.contact');
  }

  public function postContact(ContactRequest $request){
    $name = $request->fullname;
    $email = $request->email;
    $subject = $request->subject;
    $content = $request->content;
    $data= [
      'fullname' => $name,
      'email'    => $email,
      'subject'  => $subject,
      'content'  => $content
    ];
    $result = $this->contact->sendContact($data);
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
