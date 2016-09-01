<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchGroup extends Model
{
  protected $table='research_groups';
  protected $fillable=['name','co_cordinator','description'];

  protected $hidden=[];

  public function faculty(){
    return $this->belongsTo(Faculty::class,'faculty_id');
  }
}
