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
  
  
}
