<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
  public function getItem()
  {
    return DB::table('utilities')
      ->get();
  }
}
