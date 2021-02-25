<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\RoomType;
use App\Model\Util;
use DB;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey   = 'rid';
    public function getItem()
    {
      return DB::table('rooms')
        ->join('room_type','rooms.type_id', '=', 'room_type.type_id')
        ->join('utilities', 'rooms.uid', '=', 'utilities.uid')
        ->select('rooms.*', 'room_type.tname as tname', 'utilities.*')
        ->paginate(4);
    }

    public function getItemID($id)
    {
      return DB::table('rooms')
        ->join('room_type','rooms.type_id', '=', 'room_type.type_id')
        ->join('utilities', 'rooms.uid', '=', 'utilities.uid')
        ->select('rooms.*', 'room_type.tname as tname', 'utilities.*')
        ->where('room_type.type_id', $id)
        ->paginate(4);
    }

    public function getItemT()
    {
      return DB::table('room_type')
      ->get();
    }

    public function getItemU()
    {
      return DB::table('utilities')
      ->get();
    }

    public function addItemRoom($data)
    {
      return DB::table('rooms')->insert([
        $data
      ]);
    }

    public function editItemRoom($data, $id)
    {
      return DB::table('rooms')
      ->where('rid', $id)
      ->update($data);
    }

    public function delItemRoom($id)
    {
      return DB::table('rooms')
      ->where('rid', $id)
      ->delete();
    }

    public function getItemRoom($id)
    {
      return $this->findOrFail($id);
    }

    public function listRoom()
    {
       return $this->beLongsTo(RoomType::class, 'type_id', 'type_id');
    }
}
