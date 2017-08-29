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
			->orderBy('id_tarifa','asc')
			->paginate(5);
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

		$tarifa->save();

		return Redirect::to('/tarifa');
	}
}
