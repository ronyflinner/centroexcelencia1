<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WordController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		return view('prensa.word.index');
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
		$slug = str_random(60);

		$newName = str_random(100); // crea nuevo nombre

		$guessFileExtension = $file->guessExtension();

		$path = $file->move('words', $newName . '.' . $guessFileExtension);

		$insertid = \DB::table('image_depots')->insertGetId(
			['path' => $path, 'type_id' => 2, 'status' => 0, 'slug' => $slug]);

		return $insertid;

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(WordRequest $request) {

		$title_entre = $request->input('title_entre');

		$url_p = $request->input('msg');

		$date = date_create($request->input('calendar'));
		$f_date = date_format($date, "Y/m/d");

		$f_message = $request->input('message');

		$slug = str_random(180);

		if ($request->file('f_principal')) {
			$path_principal = $this->addFile($request->file('f_principal'));

			$insertid = \DB::table('presses')->insertGetId(
				['url_title_id' => $path_principal, 'url_image_id' => 0, 'status' => 0, 'title' => $title_entre, 'slug' => $slug, 'description' => ' ', 'type_id' => 3, 'publish' => $f_date]);
			Session::flash('mensaje_success', 'Sus datos fueron guardados correctametne');
		} else {
			Session::flash('mensaje_errors', 'Ingrese las imagenes');

		}

		return view('prensa.word.index');
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
