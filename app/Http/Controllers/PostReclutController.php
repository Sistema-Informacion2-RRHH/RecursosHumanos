<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostReclut;
use Illuminate\Support\Facades\Redirect;
use App\Postulante;
use App\Reclutamiento;

class PostReclutController extends Controller
{
    public function __construct(){
      $this->mIddleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('PostReclut',1);

    	$PostReclut=PostReclut::orderBy('Id','ASC')->paginate(10);
       
        //$postreclut=DB::table('postreclut')->orderBy('Id','asc')->get ();
        //dd($postreclut);

       return view ('recursos.postreclut.index')
       ->with('recursos',$recursos)
       ->with('postreclut',$PostReclut);

    }

    public function create(){
        $recursos=$this->recurso();
    

    	return view ('recursos.postreclut.create')
        ->with('recursos',$recursos)
         ->with('postulante',Postulante::orderBy('Id','DESC')->get())
         ->with('reclutamiento',Reclutamiento::orderBy('Id','DESC')->get());
        
    }

    public function store(Request $request){
        $this->historial('PostReclut',2);

    	$PostReclut=new PostReclut;

        $PostReclut->IdReclutamiento=$request->get('IdReclutamiento');
        $PostReclut->IdPostulante=$request->get('IdPostulante');
        $PostReclut->FechaSolicitud=$request->get('FechaSolicitud');
        $PostReclut->HoraSolicitud=$request->get('HoraSolicitud');
        
    	$PostReclut->save();
    	
    	
    	return Redirect::to('postreclut');
    }
    
    
    public function show($Id){
    	
        return view('recursos.postreclut.show')->with('postreclut',PostReclut::findOrFail($Id));
    }
    
    public function edit($Id){
    	$recursos=$this->recurso();
    
        return view('recursos.postreclut.edit')
        ->with('recursos',$recursos)
         ->with('postreclut',PostReclut::findOrFail($Id))
         ->with('postulante',Postulante::orderBy('Id','DESC')->get())
         ->with('reclutamiento',Reclutamiento::orderBy('Id','DESC')->get());
    }

    public function update(Request $request,$Id ){
        $this->historial('PostReclut',3);

    	$PostReclut=PostReclut::findOrFail($Id);

    	$PostReclut->IdReclutamiento=$request->get('IdReclutamiento');
        $PostReclut->IdPostulante=$request->get('IdPostulante');
        $PostReclut->FechaSolicitud=$request->get('FechaSolicitud');
        $PostReclut->HoraSolicitud=$request->get('HoraSolicitud');
    
    	$PostReclut->update();
    	
    	return Redirect::to('postreclut');

    }

    public function destroy($Id){
        $this->historial('PostReclut',4);

        $PostReclut=PostReclut::findOrFail($Id);
    	$PostReclut->delete();
    	
    	return Redirect::to('postreclut');
    }
}
