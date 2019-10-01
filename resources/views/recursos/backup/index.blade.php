
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
            <a href="{{URL('/exportar')}}">
            <button class="btn btn-info">EXPORTAR BASE DE DATOS</button>
            </a>  
        </div>
        <div>
            <a href="http://localhost:8080/phpmyadmin/db_import.php?db=recursoshumanos&token=492aa41ca7986d32f6eeefa5ed0a9587">
            <button class="btn btn-info">IMPORTAR BASE DE DATOS</button>
            </a>  
        </div>

    </div>

    
 </div>

@endsection

