<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Redirect;
use App\Cargo;
use App\Departamento;
use App\InformacionPrivada;
use App\JefeDepartamento;
use App\Contrato;
use App\Http\Requests\EmpleadoFormRequest;

class EmpleadoController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
        $this->historial('Empleado',1);

    	$empleado=Empleado::orderBy('Id','ASC')->paginate(10);
       
            return view ('recursos.empleado.index')
            ->with('recursos',$recursos)
            ->with('empleado',$empleado);
    } 

    public function create(){
        $recursos=$this->recurso();
    	return view ('recursos.empleado.create')
        ->with('recursos',$recursos)
         ->with('cargo',Cargo::orderBy('Nombre','DESC')->get())
         ->with('informacionprivada',InformacionPrivada::orderBy('id','DESC')->get())
        ->with('departamento',Departamento::orderBy('Nombre','DESC')->get())
        ->with('jefedepartamento',JefeDepartamento::orderBy('Codigo','DESC')->get())
        ->with('contrato',Contrato::orderBy('Codigo','DESC')->get());
    }

    public function store(EmpleadoFormRequest $request){
        
        $this->historial('Empleado',2);
    	$empleado=new Empleado;
    	$empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Direccion=$request->get('Direccion');
        $empleado->Correo=$request->get('Correo');
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
    
    
    public function show($Id){
    	
        return view('recursos.empleado.show')->with('empleado',Empleado::findOrFail($Id));
    }
    
    public function edit($Id){

        $recursos = $this->recurso();
       
        return view('recursos.empleado.edit')
        ->with('empleado',Empleado::findOrFail($Id))
        ->with('recursos', $recursos)
        ->with('cargo',Cargo::orderBy('Nombre','DESC')->get())
         ->with('informacionprivada',InformacionPrivada::orderBy('id','DESC')->get())
        ->with('departamento',Departamento::orderBy('Nombre','DESC')->get())
        ->with('jefedepartamento',JefeDepartamento::orderBy('Codigo','DESC')->get())
        ->with('contrato',Contrato::orderBy('Codigo','DESC')->get());

    }

    public function update(EmpleadoFormRequest $request,$Id ){
        $this->historial('c',3);

    	$empleado=Empleado::findOrFail($Id);
    	$empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Direccion=$request->get('Direccion');
        $empleado->Correo=$request->get('Correo');
        $empleado->Sexo=$request->get('Sexo');
        $empleado->Profesion=$request->get('Profesion');
        $empleado->IdCargo=$request->get('IdCargo');
        $empleado->IdInformPrivada=$request->get('IdInformPrivada');
        $empleado->CodigoDpto=$request->get('CodigoDpto');
        $empleado->CodigoJefeDpto=$request->get('CodigoJefeDpto');
        $empleado->CodigoContrato=$request->get('CodigoContrato');
    	$empleado->update();
    	
    	return Redirect::to('empleado');

    }

    public function destroy($Id){
        $this->historial('Empleado',4);

        $empleado=Empleado::findOrFail($Id);
    	$empleado->delete();
    	
    	return Redirect::to('empleado');
    }
}
