<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Model\RoomType;
use App\Model\Util;

class RoomController extends Controller
{

  public function __construct(Room $room, RoomType $roomtype, Util $util){
    $this->room = $room;
    $this->room_type = $roomtype;
    $this->util = $util;
  }

  public function index(){
    $listroom = $this->room->getItem();
    return view('admin.room.index',compact('listroom'));
  }

  public function add(){
    $listroom = $this->room->getItemU();
    $roomtype = $this->room->getItemT();
    return view('admin.room.add',compact('listroom', 'roomtype'));
  }

  public function postAdd(Request $request){
    //upload file
    $path = $request->file('hinhanh')->store('picture');
    $name = $request->tentruyen;
    $mota = $request->mota;
    $tid  = $request->roomtype;
    $subject  = $request->subject;
    $uid  = $request->uid;
    //$ldate = new DateTime('now');
    $data = [
      'rname'=>$name,
      'description'=>$mota,
      'picture'=>$path,
      'type_id'=>$tid,
      'uid'=>$uid,
      'title'=>$subject,
      'view' =>0
      ];
    $result = $this->room->addItemRoom($data);
    if($result){
      return redirect()
      ->route('admin.room.index');
    }else{
      return redirect()
      ->route('admin.room.index')
      ->with('msg','Error!!');
    }
  }

  public function delete($id){
    $Room = new Room;
    $Room = Room::find($id);
    $result = $Room->delItemRoom($id);
    $success = false;
    if ($post) {
      $msg = "Xoa thành công";
      $success = true;
    }else{
      $msg = "Thất bại";
    }
    return response()->json(array('success' => $success, 'msg' => $msg));
  }

  public function edit($id){
    //lay loai phong hien tai
    $room = $this->room->getItemRoom($id);
    $listroom = $this->room->getItemU();
    $roomtype = $this->room->getItemT();
    return view('admin.room.edit',compact('id','room','listroom', 'roomtype'));
  }

  public function postEdit(Request $request, $id){
    $mota = $request->mota;
    if($mota == null){
      $files = $request->file('hinhanh');
      $name = $request->tentruyen;
      $tid  = $request->roomtype;
      $subject = $request->subject;
      $uid  = $request->util;
      if($files != ''){
        $path = $files->store('picture');
        $data = [
          'rname'=>$name,
          'picture'=>$path,
          'type_id'=>$tid,
          'uid'=>$uid,
          'title'=>$subject
          ];
      }else{
        $data = ['rname'=>$name];
      }
    }else{
      $files = $request->file('hinhanh');
      $name = $request->tentruyen;
      $tid  = $request->roomtype;
      $subject = $request->subject;
      $uid  = $request->util;
      if($files != ''){
        $path = $files->store('picture');
        $data = [
          'rname'=>$name,
          'picture'=>$path,
          'description'=>$mota,
          'type_id'=>$tid,
          'uid'=>$uid,
          'title'=>$subject
          ];
      }else{
        $data = [
          'rname'=>$name,
          'description'=>$mota,
          'type_id'=>$tid,
          'uid'=>$uid,
          'title'=>$subject
      ];
      }
    }
    $result = $this->room->editItemRoom($data, $id);
    if($result){
      return redirect()
      ->route('admin.room.index');
    }else{
      return redirect()
      ->route('admin.room.index')
      ->with('msg','Error!!');
    }
  }
}
