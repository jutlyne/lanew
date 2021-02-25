<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Count;
use App\Model\Contact;

class IndexController extends Controller
{
    public function __construct(Count $count, Contact $contact){
      $this->count = $count;
      $this->contact = $contact;
    }

    public function index(){
      $contact = $this->contact->getContact();
      $countr = $this->count->getCountR();
      $countt = $this->count->getCountT();
      $countu = $this->count->getCountU();
      $countp = $this->count->getCountP();
      return view('admin.index.index', compact('countr','countt','countu','countp', 'contact'));
    }
}
