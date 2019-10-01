<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\JefeDepartamento;
use App\Departamento;

class JefeDepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recursos = $this->recurso();
        ///   $this->historial('Jefe_Departamento',1);

        $jefedepartamento = JefeDepartamento::orderBy('Codigo', 'ASC')->paginate(10);

        return view('recursos.jefedepartamento.index')
            ->with('recursos', $recursos)
            ->with('jefedepartamento', $jefedepartamento);
    }

    public function create()
    {
        $recursos = $this->recurso();

        return view('recursos.jefedepartamento.create')
            ->with('recursos', $recursos)
            ->with('departamento', Departamento::orderBy('Nombre', 'DESC')->get());
    }

    public function store(Request $request)
    {
        //  $this->historial('Jefe_Departamento',2);

        $jefedepartamento = new JefeDepartamento;
        $jefedepartamento->Codigo = $request->get('Codigo');
        $jefedepartamento->CorreoElectronico = $request->get('CorreoElectronico');
        $jefedepartamento->Descripcion = $request->get('Descripcion');
        $jefedepartamento->CodigoDpto = $request->get('CodigoDpto');
        $jefedepartamento->save();

        return Redirect::to('jefedepartamento');
    }


    public function show($Codigo)
    {

        return view('recursos.jefedepartamento.show')->with('jefedepartamento', JefeDepartamento::findOrFail($Codigo));
    }

    public function edit($Codigo)
    {
        $recursos = $this->recurso();


        return view('recursos.jefedepartamento.edit')
            ->with('recursos', $recursos)
            ->with('jefedepartamento', JefeDepartamento::findOrFail($Codigo))
            ->with('departamento', Departamento::orderBy('Nombre', 'DESC')->get());
    }

    public function update(Request $request, $Codigo)
    {
        //$this->historial('Jefe_Departamento',3);

        $jefedepartamento = JefeDepartamento::findOrFail($Codigo);

        $jefedepartamento->CorreoElectronico = $request->get('CorreoElectronico');
        $jefedepartamento->Descripcion = $request->get('Descripcion');
        $jefedepartamento->CodigoDpto = $request->get('CodigoDpto');
        $jefedepartamento->update();

        return Redirect::to('jefedepartamento');
    }

    public function destroy($Codigo)
    {
        // $this->historial('Jefe_Departamento',4);

        $jefedepartamento = JefeDepartamento::findOrFail($Codigo);
        $jefedepartamento->delete();

        return Redirect::to('jefedepartamento');
    }
}
