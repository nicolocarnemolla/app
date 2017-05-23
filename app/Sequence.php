<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    public $timestamps = false;
    protected $fillable = ['posizione','cella','delay','grid_id'];
    
    public function grid()
  {
    return $this->belongsTo('App\Grid');
  }
    
}
