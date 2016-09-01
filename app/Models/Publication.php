<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  protected $table='publications';
  protected $fillable=['faculty_id','name','link','year','type'];

  protected $hidden=[];

  public function faculty(){
    return $this->belongsTo(Faculty::class,'faculty_id');
  }
}
