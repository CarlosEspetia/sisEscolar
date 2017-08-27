<?php

namespace sisEscolar\Http\Controllers;

use Illuminate\Http\Request;

use sisEscolar\Http\Requests;

use sisEscolar\Escuela;

use Illuminate\Support\Facades\Redirect;

use sisEscolar\Http\Requests\EscuelaRequest;

use DB;

class EscuelaController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)//Metodo.
    {
        if ($request)
        {
            $query = trim($request->get('textoBusqueda'));
            $escuelas = DB::table('escuelas')->where('nombre_escuela','LIKE','%'.$query.'%')
            ->orderBy('id_escuela','desc')
            ->paginate(5);
            return view('escuela.index', ["escuelas"=>$escuelas,"textoBusqueda"=>$query]);
        }
    }

    public function create()
    {
        return view('escuela.create');
    }

    public function store(EscuelaRequest $request)
    {
        $escuela = new Escuela();
        $escuela->nombre_escuela = $request->get('nombre_escuela');
        $escuela->direcion_escuela = $request->get('direcion_escuela');
        $escuela->tipo_escuela = $request->get('tipo_escuela');
        $escuela->save();
        return Redirect::to('/escuela');
    }

    public function show($id_escuela)
    {
        return view('escuela.show', ['escuela'=>Escuela::findOrFail($id_escuela)]);
    }

    public function edit($id_escuela)
    {
        return view('escuela.edit', ['escuela'=>Escuela::findOrFail($id_escuela)]);
    }

    public function update(EscuelaRequest $request, $id_escuela)
    {
        $escuela = Escuela::findOrFail($id_escuela);
        $escuela->nombre_escuela = $request->get('nombre_escuela');
        $escuela->direcion_escuela = $request->get('direcion_escuela');
        $escuela->tipo_escuela = $request->get('tipo_escuela');
        $escuela->update();
        return Redirect::to('/escuela');
    }

    //Pendiente para la interpretacion de su funcinamiento.
    public function destroy($id_escuela)
    {

    }
}
