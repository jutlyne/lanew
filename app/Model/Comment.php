<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Room;
use DB;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = true;

    public function getAllCmt(){
      return DB::table('comment')
      ->join('rooms','rooms.rid', '=', 'comment.post_id')
      ->select('comment.*', 'rooms.rname as rname')
      ->paginate(5);
    }

    public function delCmt($id)
    {
      return DB::table('comment')
      ->where('id', $id)
      ->delete();
    }

    public function getCmt($id){
      return DB::table('comment')
      ->where('post_id', $id)
      ->paginate(3);
    }
    
    public function getItemCmt($id)
    {
      return $this->findOrFail($id);
    }

}
