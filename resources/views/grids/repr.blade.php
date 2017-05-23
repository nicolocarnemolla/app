@extends ('layouts.master')

@section ('content')

         
<input type="hidden" id="gridid" value="{{ $grid->id}}" />  

<div id="main-content" class="cointaner">
 <div class="section no-pad-bot" >
 <div class="row">
 <div class="col l12 s12 white z-depth-1">

    <div class="row">
    <div class="offset-m4 col s12 m6">
	 <h5 class=" light-blue-text text-darken-3">{{$grid->description . ' ' . $grid->id }} </h5>
   </div>
   </div>
  <div class="row">
   <div class="offset-m4 col s12 m6">
   <table>
   <?php $position=1; ?>
  @for ($i = 0; $i < $grid->row ; $i++)
    <tr>  
    @for ($z = 0; $z < $grid->coloumn ; $z++)
    <td><div id="{{ $position }}" class="content"></div> </td>
    
    <?php $position++; ?>
    @endfor
    </tr>
  @endfor 
  </table>
   </div >
 </div>
  
  
  
  
  
    
    

</div>
</div>
</div>
</div>
@endsection


@section('javascript')
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script>
 
function accendi(id) {
    $('#'+id).css('background-color', '#DCDCDC');
    
}
   
$(document ).ready(function() {
    
    $.getJSON('/grids/'+$('#gridid').val()+'/sequenza', function(data) {
          
          $.each(data, function(key, value){
        
           setTimeout(function() {
            accendi(value.cella);
           
            }, value.delay);
        
        
        }); 
             
            
    });
   
  
  
});
</script>