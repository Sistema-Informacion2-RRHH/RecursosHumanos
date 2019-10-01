
@extends('plantilla.main')

@section('titulo')
 BACKUP
@endsection

@section('contenido')

 <div class="container">


    <div class="row">

        <div>

           <h3>ADMINISTRACION DE COPIA DE SEGURIDAD </h3>            
             
        </div>

        <div>
            <a href="{{URL::action('BackupController@exportar',null)}}">
            <button class="btn btn-info">EXPORTAR BASE DE DATOS</button>
            </a>  
        </div>
        <div>
            <a href="{{URL::action('BackupController@importar',null)}}">
            <button class="btn btn-info">IMPORTAR BASE DE DATOS</button>
            </a>  
        </div>

    </div>

    
 </div>

@endsection

