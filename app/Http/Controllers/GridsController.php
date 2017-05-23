<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Grid;

class GridsController extends Controller
{
    public function index()
    {     
            
            $grids=Grid::has('sequences')->get();
            
            
            return view('grids.index',compact('grids'));
        
        
    }
    
    public function show(Grid $grid)
    
    {
        
           
            if($grid->sequences->count()==0){    
            
            return view('grids.show',compact('grid'));
            
            }else{
                
            return view('grids.repr',compact('grid'));
            
            }            
    }
    
     public function store()
    {
           
           
           
           
           $grid = Grid::create([
             
            'row'=>request('righe'),
            
            'coloumn'=>request('colonne')
            
           
           ]);
           
           
           return redirect('/grids/'.$grid->id);
        
    }
}
