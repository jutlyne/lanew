<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RoomService;

class ApiRoomController extends Controller
{

  public function __construct(RoomService $roomService){
    $this->roomService = $roomService;
  }

  public function delRoom(Request $request){
    $post = $this->roomService->del($request);
    if ($post) {
      $msg = "Thêm comment thành công";
      $success = true;
    }else{
      $msg = "Thêm comment thất bại";
    }
    return response()->json(array('success' => $success, 'msg' => $msg));
  }

}
