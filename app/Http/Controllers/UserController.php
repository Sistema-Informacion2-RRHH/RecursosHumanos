<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Rol;
use Illuminate\Support\Facades\Auth;
use App\Bitacora;
use DB;


class UserController extends Controller
{
    public function __construct(){
     $this->middleware('auth');
    }

    public function index(){

    	$user=User::orderBy('id','ASC')->paginate(10);
 
       $this->historial('Usuario',1);
       $recursos=$this->recurso();
     
       return view ('recursos.user.index')
       ->with('user',$user)
       ->with('recursos',$recursos);
      

    } 

    public function create(){
        $recursos=$this->recurso();
    	return view ('recursos.user.create')
    	->with('rol',Rol::orderBy('nombre','DESC')->get())
        ->with('recursos',$recursos);
    }

    public function store(Request $request){
    	$user=new User;
    	$user->name=$request->get('name');
    	$user->email=$request->get('email');
    	$user->password=bcrypt($request->get('password'));
    	$user->idrol=$request->get('idrol');
    	$user->save();

        $this->historial('Usuario',2);
    	
    	return Redirect::to('user');
    }
    
    
    public function show($id){
    	
        return view('recursos.user.show')->with('user',User::findOrFail($id));
    }
    
    public function edit($id){

        $recursos=$this->recurso();
    
        return view('recursos.user.edit')
        ->with('user',User::findOrFail($id))
        ->with('rol',Rol::orderBy('nombre','DESC')->get())
        ->with('recursos',$recursos);
    }

    public function update(Request $request,$id ){

    	$user=User::findOrFail($id);

    	$user->name=$request->get('name');
    	$user->email=$request->get('email');
    	//$user->password=bcrypt($request->get('password'));
    	$user->idrol=$request->get('idrol');
    	$user->update();

        $this->historial('Usuario',3);

    	return Redirect::to('user');

    }

    public function destroy($id){

        $user=User::findOrFail($id);
    	$user->delete();

        $this->historial('Usuario',4);
    	
    	return Redirect::to('user');
    }
}
