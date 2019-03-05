<?php

namespace App\Http\Controllers\CentroLiga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InscripcionController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('web.inscripcion');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function addFile($file) {
		$newName = str_random(100);
		$guessFileExtension = $file->guessExtension();
		$path = $file->move('img', $newName . '.' . $guessFileExtension);

		/*	$insertid = \DB::table('image_depots')->insertGetId(
				['path' => $path, 'type_id' => 0, 'status' => 0, 'slug' => $slug]);*/

		return $path;

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$this->validate($request, [
            'captcha' => 'required|captcha'
        ]);
		//
		$name = $request->input('name');
		$dni = $request->input('dni');
		$email = $request->input('email');
		$cell = $request->input('cell');
		$curso = $request->input('curso');
		$tipo = $request->input('tipo');
		$archivo = $request->file('archivo');
		$slug = str_random(180);
		$slug2 = str_random(180);
		$fecha = date("Y") . "-" . date("m") . "-" . date("d");

		if ($request->file('archivo')) {

			$path = $this->addFile($request->file('archivo'));

			$insertid = \DB::table('personas')->insertGetId(
				['nombre' => $name, 'dni' => $dni, 'email' => $email, 'tipo_persona' => 1, 'token' => $slug, 'numero' => $cell]);

			$insertid2 = \DB::table('inscripcions')->insertGetId(['id_curso' => $curso, 'id_persona' => $insertid, 'tipo_inscripcion' => $tipo, 'voucher' => $path, 'token' => $slug2, 'fecha_inscripcion' => $fecha, 'estado' => 0]);
			Session::flash('mensaje_success', 'Sus datos fueron guardados correctamente');
			return view('web.inscripcion');
			return response()->json($curso);
		} else {
			return response()->json(2);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
