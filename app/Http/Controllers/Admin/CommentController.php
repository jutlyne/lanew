<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Room;
use App\Model\Comment;
use App\Model\AdminUser;

class CommentController extends Controller
{
    public function __construct(Room $room, Comment $comment, AdminUser $adminUser){
      $this->room = $room;
      $this->comment = $comment;
      $this->adminUser = $adminUser;

    }
    public function index(){
      $comment = $this->comment->getAllCmt();
      $isAdmin = $this->adminUser->isAdmin();
      return view('admin.comment.index',compact('comment', 'isAdmin'));
    }
    public function delete($id){
      $Comment = new Comment;
      $Comment = Comment::find($id);
      $Comment->delCmt($id);
      return response()->json([
          'success' => 'Xoá thành công'
      ]);
    }
}
