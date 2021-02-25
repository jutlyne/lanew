<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\RoomType;
use App\Model\Util;
use DB;

class Contact extends Model
{
    protected $table = 'vnecontact';
    protected $primaryKey   = 'cid';
    public function getContact()
    {
      return DB::table('vnecontact')
      ->paginate(3);
        //->get();
    }
    public function getReply($id){
      return DB::table('vnecontact')
      ->where('cid', $id)
      ->get();
    }

    public function sendContact($data){
      return DB::table('vnecontact')
      ->insert([
        $data
      ]);
    }

    public function addContact(){
      return DB::table('vnecontact')->insert([
        $data
      ]);
    }
}
