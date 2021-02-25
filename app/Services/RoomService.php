<?php

namespace App\Services;
use App\Model\Room;
use App\Model\RoomType;

class RoomService
{
    public function __construct(Room $roomModel, RoomType $roomTypeModel){
      $this->roomModel = $roomModel;
      $this->roomTypeModel = $roomTypeModel;
    }

    public function getListRoom()
    {
      $result = $this->roomModel;
      $result = $result->orderBy('created_at', 'DESC');
      $result = $result->paginate(3);
      return $result;
    }

    public function getListRoomType()
    {
      $result = $this->roomTypeModel;
      $result = $result->orderBy('type_id', 'DESC');
      $result = $result->get();
      return $result;
    }

    public function del($id)
    {
      return DB::table('rooms')
      ->where('rid', $id)
      ->delete();
    }
}
