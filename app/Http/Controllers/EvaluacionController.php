<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EvaluacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recursos = $this->recurso();
        $evaluacion = Evaluacion::orderBy('Codigo', 'ASC')->paginate(10);

        //$this->historial('Evaluacion',1);
        return view('recursos.evaluacion.index')
            ->with('recursos', $recursos)
            ->with('evaluacion', $evaluacion);
    }

    public function create()
    {
        $recursos = $this->recurso();
        return view('recursos.evaluacion.create')
            ->with('recursos', $recursos);
    }

    public function store(Request $request)
    {
        //$this->historial('Evaluacion',2);
        $evaluacion = new Evaluacion;
        $evaluacion->FechaInicio = $request->get('FechaInicio');
        $evaluacion->FechaFin = $request->get('FechaFin');
        $evaluacion->HoraInicio = $request->get('HoraInicio');
        $evaluacion->HoraFin = $request->get('HoraFin');
        $evaluacion->Descripcion = $request->get('Descripcion');
        $evaluacion->TipoEvaluacion = $request->get('TipoEvaluacion');
        $evaluacion->save();

        return Redirect::to('evaluacion');
    }


    public function show($Codigo)
    {

        return view('recursos.evaluacion.show')->with('evaluacion', Evaluacion::findOrFail($Codigo));
    }

    public function edit($Codigo)
    {
        $recursos = $this->recurso();
        return view('recursos.evaluacion.edit')
            ->with('recursos', $recursos)
            ->with('evaluacion', Evaluacion::findOrFail($Codigo));
    }

    public function update(Request $request, $Codigo)
    {

        //$this->historial('Evaluacion',3);
        $evaluacion = Evaluacion::findOrFail($Codigo);
        $evaluacion->FechaInicio = $request->get('FechaInicio');
        $evaluacion->FechaFin = $request->get('FechaFin');
        $evaluacion->HoraInicio = $request->get('HoraInicio');
        $evaluacion->HoraFin = $request->get('HoraFin');
        $evaluacion->Descripcion = $request->get('Descripcion');
        $evaluacion->TipoEvaluacion = $request->get('TipoEvaluacion');
        $evaluacion->update();

        return Redirect::to('evaluacion');
    }

    public function destroy($Codigo)
    {
        //$this->historial('Evaluacion',4);

        $evaluacion = Evaluacion::findOrFail($Codigo);
        $evaluacion->delete();

        return Redirect::to('evaluacion');
    }
}
