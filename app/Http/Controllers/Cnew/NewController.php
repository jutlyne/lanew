<?php

namespace App\Http\Controllers\Cnew;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\RoomService;
use App\Model\Room;
use App\Model\RoomType;
use App\Model\Comment;
use App\Model\Count;

class NewController extends Controller
{
    protected $roomService;
    public function __construct(RoomService $roomService, Room $room, RoomType $roomtype, Comment $comment, Count $count){
      $this->roomService = $roomService;
      $this->room = $room;
      $this->comment = $comment;
      $this->roomtype = $roomtype;
      $this->count = $count;
    }

    public function index(){
      return view('cnew.new.index');
    }

    public function cat(){

      $room = $this->room->getItem();
      $roomType = $this->roomService->getListRoomType();
      return view('cnew.new.cat')
      ->with('room', $room)
      ->with('roomType', $roomType);
    }
    public function detail($id){
      $detailKey = 'detail_'.$id;
      $post = Room::findOrFail($id);
      //check xem session cua trang co ton tai khong
      //khong ton tai thi tang view len them 1
      if (!Session::has($detailKey)){
        $post->increment('view');
        Session::put($detailKey, 1);
      };
      $room = $this->room->getItemRoom($id);
      $comment = $this->comment->getCmt($id);
      $count = $this->count->getCountCmt($id);
      $listroom = $this->room->getItemU();
      $roomtype = $this->room->getItemT();
      return view('cnew.new.detail',compact('id','room','listroom', 'roomtype', 'comment', 'count'));
    }

}
