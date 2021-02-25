<?php

namespace App\Http\Controllers\Cnew;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RoomService;
use App\Model\Room;
use App\Model\RoomType;
use App\Model\Comment;

class CatController extends Controller
{
    protected $roomService;
    public function __construct(RoomService $roomService, Room $room, RoomType $roomtype, Comment $comment){
      $this->roomService = $roomService;
      $this->room = $room;
      $this->comment = $comment;
      $this->roomtype = $roomtype;
    }

    public function cat($id){
      $room = $this->room->getItemID($id);
      $roomType = $this->roomtype->getRoomType();
      return view('cnew.new.cat')
      ->with('room', $room)
      ->with('roomType', $roomType);
    }

}
