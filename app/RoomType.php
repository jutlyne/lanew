<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class RoomType extends Model
{
    protected $table = 'room_type';
    protected $primaryKey   = 'type_id';
    public function getItem()
    {
      return DB::table('room_type')->orderBy('type_id','desc')->paginate(2);
    }
}
