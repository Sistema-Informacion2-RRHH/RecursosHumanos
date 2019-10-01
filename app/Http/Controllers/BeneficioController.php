<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficio;
use Illuminate\Support\Facades\Redirect;


class BeneficioController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();

    	$beneficio=Beneficio::orderBy('id','ASC')->paginate(10);
       return view ('recursos.beneficio.index')->with('recursos',$recursos)->with('beneficio',$beneficio);

    } 

    public function create(){
        $recursos=$this->recurso();
    	return view ('recursos.beneficio.create')->with('recursos',$recursos);
    }

    public function store(Request $request){
    	$beneficio=new Beneficio;
    	$beneficio->id=$request->get('id');
    	$beneficio->Descripcion=$request->get('Descripcion');
    	$beneficio->save();
    	
    	return Redirect::to('beneficio');
    }
    
    
    public function show($id){
    	
        return view('recursos.beneficio.show')->with('beneficio',Beneficio::findOrFail($id));
    }
    
    public function edit($id){
        $recursos=$this->recurso();
    	
        return view('recursos.beneficio.edit')->with('recursos',$recursos)
        ->with('beneficio',Beneficio::findOrFail($id));
    }

    public function update(Request $request,$id ){

    	$beneficio=Beneficio::findOrFail($id);
    	$beneficio->Descripcion=$request->get('Descripcion');
    	$beneficio->update();
    	
    	return Redirect::to('beneficio');

    }

    public function destroy($id){

        $beneficio=Beneficio::findOrFail($id);
    	$beneficio->delete();
    	
    	return Redirect::to('beneficio');
    }
}
