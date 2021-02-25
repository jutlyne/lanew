<?php

namespace App\Http\Controllers\Cnew;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use App\Model\RoomType;

class IndexController extends Controller
{
    public function __construct(Room $mroom, RoomType $roomtype){
      $this->mroom = $mroom;
      $this->roomtype = $roomtype;

    }
    public function Index(){
      $item = $this->mroom->getItem();
      return view('cnew.index.index', compact('item'));
    }

    public function LeftBar(){
      $roomtype = $this->roomtype->getRoomType();
      return view('template.cnew.leftbar', compact('roomtype'));
    }
}
