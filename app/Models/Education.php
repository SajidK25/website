<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table='educations';
  protected $fillable=['faculty_id','name_of_degree','institution','year','remarks'];

  protected $hidden=[];

  public function faculty(){
    return $this->belongsTo(Faculty::class,'faculty_id');
  }
}
