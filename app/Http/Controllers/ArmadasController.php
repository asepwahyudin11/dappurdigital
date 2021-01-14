<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, DB;
use App\Armada;

class ArmadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Armada::all();
        return view("admin.data_armada")->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        return view("admin.tambah_armada");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required'
        ]);

        Armada::create($request->all());

        Session::flash("success", "Armada success created");
        return redirect()->route("armadas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $armada = Armada::find($id);
        return view('admin.edit_armada')->with('armada', $armada);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_armada = Armada::find($id);
            $new_armada->name = $request->name;
            $new_armada->location = $request->location;
            $new_armada->description = $request->description;
            $new_armada->save();
        Session::flash("notice", "Article success update");
        return redirect()->route("armadas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Armada::destroy($id);
        Session::flash("notice", "Armada success deleted");
        return redirect()->route("armadas.index");
    }
}
