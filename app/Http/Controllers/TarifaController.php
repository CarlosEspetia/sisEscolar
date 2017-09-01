<?php

namespace sisEscolar\Http\Controllers;

use Illuminate\Http\Request;

use sisEscolar\Http\Requests;

use sisEscolar\Tarifa;

use DB;

use Illuminate\Support\Facades\Redirect;

use sisEscolar\Http\Requests\TarifaRequest;


class TarifaController extends Controller
{
	public function __construct()
	{

	}

	public function index(Request $request) 
	{
		if ($request) 
		{
			$query = trim($request->get('TextoBusqueda'));
			$tarifas = DB::table('tarifas')
			->where('concepto','LIKE','%'.$query.'%')
			->where ('condicion','=','1')
			->orderBy('id_tarifa','asc')
			->paginate(10);
			return view ('tarifa.index', ['tarifas'=>$tarifas,'TextoBusqueda'=>$query]);
		}
	}

	public function create() 
	{
		return view('tarifa.create');
	}

	public function store(TarifaRequest $request) 
	{
		$tarifa = new Tarifa();
		$tarifa->concepto = $request->get('concepto');
		$tarifa->monto = $request->get('monto');
		$tarifa->condicion = true;
		$tarifa->save();

		return Redirect::to('/tarifa');
	}

	public function edit($id_tarifa)
	{
		return view('tarifa.edit',['tarifa'=>Tarifa::findOrFail($id_tarifa)]);

	}

	public function update(TarifaRequest $request,$id_tarifa) 
	{
		$tarifa = Tarifa::findOrFail($id_tarifa);
		$tarifa->concepto = $request->get('concepto');
		$tarifa->monto = $request->get('monto');
		$tarifa->update();

		return Redirect::to('/tarifa');
	}

	public function destroy($id_tarifa)
	{
		$tarifa = Tarifa::findOrFail($id_tarifa);
		$tarifa->condicion = '0';
		$tarifa->update();
		//$tarifa->concepto = $request->get('concepto');

		return Redirect::to('/tarifa');
	}
}
