<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class RoomType extends Model
{
    protected $table = 'room_type';
    protected $primaryKey   = 'type_id';
    public function getItem()
    {
      return DB::table('room_type')
        ->paginate(3);
    }

    public function getRoomType(){
      return DB::table('room_type')
      ->get();
    }

    public function getRoomTypeID($id){
      return DB::table('room_type')
      ->where('type_id', $id)
      ->get();
    }

    public function addItemRoom($data)
    {
      return DB::table('room_type')->insert([
        $data
      ]);
    }

    public function editItemRoom($data, $id)
    {
      return DB::table('room_type')
      ->where('type_id', $id)
      ->update($data);
    }

    public function delItemRoom($id)
    {
      return DB::table('room_type')
      ->where('type_id', $id)
      ->delete();
    }

    public function getItemRoom($id)
    {
      return $this->findOrFail($id);
    }
}
