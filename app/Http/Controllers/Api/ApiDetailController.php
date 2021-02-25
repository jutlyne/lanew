<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DetailService;

class ApiDetailController extends Controller
{

  public function __construct(DetailService $detailService){
    $this->detailService = $detailService;
  }

  public function postComment(Request $request){
    $requestRequire = array('post_id', 'name', 'comment', 'email');
    $request = $request->only($requestRequire);
    $success = false;

    foreach ($requestRequire as $key => $value) {
      if (empty($request[$value]) || !isset($request[$value])) {
        $msg = $value . " không được để trống";
        return response()->json(array('success' => $success, 'msg' => $msg));
      }
    }

    $post = $this->detailService->insert($request);
    if ($post) {
      $msg = "Thêm comment thành công";
      $success = true;
    }else{
      $msg = "Thêm comment thất bại";
    }
    return response()->json(array('success' => $success, 'msg' => $msg));
  }

}
