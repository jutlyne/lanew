<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Count extends Model
{
    public function getCountR()
    {
      return DB::table('rooms')
      ->count();
    }

    public function getCountT()
    {
      return DB::table('room_type')
      ->count();
    }

    public function getCountU()
    {
      return DB::table('users')
      ->count();
    }

    public function getCountP()
    {
      return DB::table('vnecontact')
      ->count();
    }

    public function getCountCmt($id){
      return DB::table('comment')
      ->where('post_id', $id)
      ->count();
    }

}
