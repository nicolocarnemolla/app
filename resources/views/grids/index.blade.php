@extends ('layouts.master')

@section ('content')

         
  
<div id="main-content" class="cointaner">
 <div class="section no-pad-bot" >
 <div class="row">
 <div class="col l12 s12 white z-depth-1">
<div class="container">
    
@if(count($grids)==0)

    <div class="row">
    <div class="alert alert-warning">
        <div id="error" class="card-panel red darken-4 black-text" > Non sono state create griglie  </div>
    </div>
    </div>
@else
    <div class="row">
    <ul class="collection with-header">
        <li class="collection-header"><h4>Griglie</h4></li>
     @foreach ($grids as $grid)
      <li class="collection-item"><div>{{$grid->description .' '.  $grid->id}}<a href="/grids/{{$grid->id}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
     @endforeach     
    <ul>
    </div>
@endif
<div class="row">
<a id="newgrid" class="waves-effect waves-light btn-large" >Crea</a>
</div> 
 </div>
 </div>
</div>
</div>    
</div>
</div>

<div id="myModal" class="modal" >
            <div class="modal-content">
                <div >
                <h4 class="modal-title">Nuova Griglia</h4>
                </div>
                <div  id="container" >
                   <form action="/savegrid" method="POST">
                   {{ csrf_field() }}
                   <div class="input-field col s12 l4 ">
                    <select name="righe">
                     <option value="2" selected>2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     
                    <select>
                    <label>Righe</label>
                    </div>
                    <div class="input-field col s12 l4 ">
                    <select name="colonne">
                     <option value="2" selected >2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                    <select>
                    <label>Colonne</label>
                    </div>
                     <div class="input-field col s12 l4">
                     <button class="btn waves-effect waves-light" type="submit" name="action">Salva
                     <i class="material-icons right">send</i>
                     </button>
                     </div>
                   </form>
                </div>
                
            </div>
        </div>

@endsection


@section('javascript')
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script>

$( document ).ready(function() {
    $('.modal').modal();
    
     $('select').material_select();
     
     $('#newgrid').click(function(){
       
      $('#myModal').modal('open')
         
     });
});

</script>