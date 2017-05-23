<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    public $timestamps = false;
    protected $fillable = ['row','coloumn'];
    
    
   public function sequences()
  {
    return $this->hasMany('App\Sequence');
  }
  public function hasSequence($id){
    return $this->has('sequences');
  }
  
}
