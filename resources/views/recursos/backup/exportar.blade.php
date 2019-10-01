
@extends('plantilla.main')

@section('titulo')
 BACKUP
@endsection

@section('contenido')

 <div class="container">


    <div class="row">

        <div>

           <h3>COPIA DE SEGURIDAD </h3>            
             
        </div>

        <div id="carga">
          ??  
        </div>
       

    </div>

    
 </div>

@endsection

@section('pie')
  <script>

//$('#carga').text("chau");

$(document).ready(function(){

 $('#carga').load("http://127.0.0.1:8000/",function(data){
                  
   $(this).html(data);

  });

 });
  
  </script>
@endsection