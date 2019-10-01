<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postulante;
use Illuminate\Support\Facades\Redirect;

class PostulanteController extends Controller
{
    public function __construct()
    {
        $this->mIddleware('auth');
    }

    public function index()
    {

        $postulante = Postulante::orderBy('Id', 'ASC')->paginate(10);
        $recursos = $this->recurso();
        $this->historial('Postulante', 1);

        return view('recursos.postulante.index')
            ->with('recursos', $recursos)
            ->with('postulante', $postulante);
    }

    public function create()
    {
        $recursos = $this->recurso();

        return view('recursos.postulante.create')
            ->with('recursos', $recursos);
    }

    public function store(Request $request)
    {

        try {

            DB::beginTransaction();


            $postulante = new Postulante;
            $postulante->CI = $request->get('CI');
            $postulante->Nombre = $request->get('Nombre');
            $postulante->Correo = $request->get('Correo');
            $postulante->NroTelefono = $request->get('NroTelefono');
            $postulante->Descripcion = $request->get('Descripcion');

            $file = $request->file('Curriculum');
            $name = 'archivo' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/documentos/';
            $file->move($path, $name);
            $postulante->Curriculum = $name;
            $postulante->save();

            DB::commit();
        } catch (\Exception $e) {

            DB::rollback();
        }
        $this->historial('Postulante', 2);

        return Redirect::to('postulante');
    }


    public function show($Id)
    {
        return view('recursos.postulante.show')->with('postulante', Postulante::findOrFail($Id));
    }

    public function edit($Id)
    {
        $recursos = $this->recurso();

        return view('recursos.postulante.edit')
            ->with('recursos', $recursos)
            ->with('postulante', Postulante::findOrFail($Id));
    }

    public function update(Request $request, $Id)
    {

        try {

            DB::beginTransaction();

            $postulante = Postulante::findOrFail($Id);
            $postulante->CI = $request->get('CI');
            $postulante->Nombre = $request->get('Nombre');
            $postulante->Correo = $request->get('Correo');
            $postulante->NroTelefono = $request->get('NroTelefono');
            $postulante->Descripcion = $request->get('Descripcion');

            if ($request->file('Curriculum')) {
                $file = $request->file('Curriculum');
                $name = 'archivo' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/documentos/';
                $file->move($path, $name);
                $postulante->Curriculum = $name;
            }
            $postulante->update();

            DB::commit();
        } catch (\Exception $e) {

            DB::rollback();
        }
        $this->historial('Postulante', 3);

        return Redirect::to('postulante');
    }

    public function destroy($Id)
    {

        $postulante = Postulante::findOrFail($Id);
        $postulante->delete();
        $this->historial('Postulante', 4);

        return Redirect::to('postulante');
    }
}
