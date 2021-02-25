<?php

namespace App\Http\Controllers\Cnew;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomType;

class LeftbarController extends Controller
{
    public function __construct(RoomType $room){
      $this->room = $room;
    }
    public function leftbar(){
      return view('template.cnew.leftbar');
    }
}
