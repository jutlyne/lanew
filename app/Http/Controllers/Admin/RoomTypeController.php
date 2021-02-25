<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomTypeRequest;
use App\Model\RoomType;
use App\Model\AdminUser;


class RoomTypeController extends Controller
{
  public function __construct(RoomType $roomtype, AdminUser $adminUser){
    $this->roomtype = $roomtype;
    $this->adminUser = $adminUser;
  }

  public function index(){
    $listroomtype = $this->roomtype->getItem();
    $isAdmin = $this->adminUser->isAdmin();
    return view('admin.roomtype.index',compact('listroomtype','isAdmin'));
  }

  public function add(){
    return view('admin.roomtype.add');
  }

  public function postAdd(RoomTypeRequest $request){
    //upload file
    //$path = $request->file('picture')->store('picture');

    $name = $request->tentruyen;
    $data = ['tname'=>$name];
    $result = $this->roomtype->addItemRoom($data);
    if($result){
      return redirect()
      ->route('admin.roomtype.index');
    }else{
      return redirect()
      ->route('admin.roomtype.index')
      ->with('msg','Error!!');
    }
  }

  public function delete($id){
    $RoomType = new RoomType;
    $RoomType = RoomType::find($id);
    $RoomType->delItemRoom($id);
    return response()->json([
        'success' => 'Xoá thành công'
    ]);
  }

  public function edit($id){
    //lay loai phong hien tai
    $roomType = $this->roomtype->getItemRoom($id);
    return view('admin.roomtype.edit',compact('id','roomType'));
  }

  public function postEdit(Request $request, $id){
    $name = $request->tentruyen;
    $data = ['tname'=>$name];
    $result = $this->roomtype->editItemRoom($data, $id);
    if($result){
      return redirect()
      ->route('admin.roomtype.index');
    }else{
      return redirect()
      ->route('admin.roomtype.index')
      ->with('msg','Error!!');
    }
  }
}
