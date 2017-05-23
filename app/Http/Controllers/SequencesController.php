<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sequence;

use App\Grid;

class SequencesController extends Controller
{
   public function store()
    {
           
        $i=0;
        foreach(request('data') as $seque){
         
         $sequenza = Sequence::create([
             
            'posizione'=>$i,
            'cella'=>$seque['cella'],
            'delay'=>$seque['delay'],
            'grid_id'=>request('gridid')
            
           
           ]);
         
        
        $i++;
        }         
         
        return 'salvataggio avvenuto' ;   
    
        
    }
    
     public function index(Grid $grid)
    {
        $sequences= $grid->sequences; 
        
        
        
         return json_encode($sequences);
           
        //eturn view('grids.repr',compact('sequences')); 
    
        
    }
    
    
}
