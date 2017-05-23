@extends ('layouts.master')

@section ('content')

         
<input type="hidden" id="gridid" value="{{ $grid->id}}" />  
{{ csrf_field() }}
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
    <td><div id="{{ $position }}" class="content "></div> </td>
    
    <?php $position++; ?>
    @endfor
    </tr>
  @endfor 
  </table>
   </div >
 </div>
  
  
  <div class="row">
  <div class="offset-m4 col s12 m3">
  <a  id="rec" class="waves-effect waves-light btn-large">recorder</a >
  </div>
  <div class="col s12 m3">
  <a  id="save" class="waves-effect waves-light btn-large disabled">Save</a>
  </div>
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
   var recorder=false;
 
   var start=0;
   var posizione=0;
   var sequenze=[];

   
$(document ).ready(function() {
   
  
  
  $("#rec").click(function() {
    
    recorder=true;   
    start = new Date();   
    $("#save").removeClass("disabled");
    $(this).addClass("disabled");   
   });
   
   $("#save").click(function() {
     
      if(sequenze.length > 1){
      $.ajax({
        url:'/saveseq', 
        type: 'POST',
        data: {'data': sequenze , '_token' : document.getElementsByName('_token').value ,'gridid':$('#gridid').val()},
        success : function(data){
          alert(data); 
          $(location).attr('href','/grids');          
          
        },
        error : function(e){
           console.log(e);
        }
      });}else{
          
        alert("selezionare almeno 2 celle")  
          
      }
       
   });
   
   
     $(".content").click( function() {
         if(recorder){
        $(this).css('background-color', '#DCDCDC');
        
        var delay = new Date() - start;
        sequenza = {}
        sequenza["cella"] = this.id;
        sequenza["delay"] =delay;
        posizione++;
        sequenze.push(sequenza);
        start=new Date();
         }
    });
    
});

</script>