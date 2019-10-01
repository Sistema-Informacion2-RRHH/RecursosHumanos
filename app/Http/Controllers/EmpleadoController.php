<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Redirect;
use App\Cargo;
use App\Departamento;
use App\Http\Requests\EmpleadoFormRequest;

class EmpleadoController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();

    	$empleado=Empleado::orderBy('id','ASC')->paginate(10);
       
            return view ('recursos.empleado.index')
            ->with('recursos',$recursos)
            ->with('empleado',$empleado);
    } 

    public function create(){
        $recursos=$this->recurso();
    	return view ('recursos.empleado.create')
        ->with('recursos',$recursos)
         ->with('cargo',Cargo::orderBy('Nombre','DESC')->get())
        ->with('departamento',Departamento::orderBy('Nombre','DESC')->get());
    }

    public function store(EmpleadoFormRequest $request){
    	$empleado=new Empleado;
        $empleado->id=$request->get('id');
    	$empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Direccion=$request->get('Direccion');
        $empleado->Email=$request->get('Email');
        $empleado->Sexo=$request->get('Sexo');
        $empleado->Profesion=$request->get('Profesion');
        $empleado->IdCargo=$request->get('IdCargo');
        $empleado->IdInformPrivada=$request->get('IdInformPrivada');
        $empleado->CodigoDpto=$request->get('CodigoDpto');
        $empleado->CodigoJefeDpto=$request->get('CodigoJefeDpto');
        $empleado->CodigoContrato=$request->get('CodigoContrato');
    	$empleado->save();
    	
    	return Redirect::to('empleado');
    }
    
    
    public function show($id){
    	
        return view('recursos.empleado.show')->with('empleado',Empleado::findOrFail($id));
    }
    
    public function edit($id){
       
        return view('recursos.empleado.edit')
        ->with('empleado',Empleado::findOrFail($id))
        ->with('cargo',Cargo::orderBy('Nombre','DESC')->get())
        ->with('departamento',Departamento::orderBy('Nombre','DESC')->get());
    }

    public function update(EmpleadoFormRequest $request,$id ){

    	$empleado=Empleado::findOrFail($id);
    	$empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Direccion=$request->get('Direccion');
        $empleado->Email=$request->get('Email');
        $empleado->Sexo=$request->get('Sexo');
        $empleado->Telefono_tra=$request->get('Telefono_tra');
        $empleado->movil_tra=$request->get('movil_tra');
        $empleado->Profesion=$request->get('Profesion');
        $empleado->IdCargo=$request->get('IdCargo');
        $empleado->CodDepartamento=$request->get('CodDepartamento');
    	$empleado->update();
    	
    	return Redirect::to('empleado');

    }

    public function destroy($id){

        $empleado=Empleado::findOrFail($id);
    	$empleado->delete();
    	
    	return Redirect::to('empleado');
    }
}
