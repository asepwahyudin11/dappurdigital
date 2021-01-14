<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, DB;
use App\Product, App\Armada;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view("admin.data_product")->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Armada::orderBy('name')->get(['id', 'name']);
        return view("admin.tambah_product")->with('data', $data);
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
            'qty_unit' => 'required',
            'price_unit' => 'required',
            'type' => 'required',
            'foto' => 'required',
            'armada_id' => 'required'
        ]);

        //Menyimpan Foto
        $image = $request->file('foto');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/img/product');
        $image->move($destinationPath, $name);

        //Menyimpan Data
        $newdata = new Product;
        $newdata->name = $request->name;
        $newdata->qty_unit = $request->qty_unit;
        $newdata->price_unit = $request->price_unit;
        $newdata->description = $request->description;
        $newdata->type = $request->type;
        $newdata->foto = $image->getClientOriginalName();
        $newdata->armada_id = $request->armada_id;
        $newdata->save();

        Session::flash("success", "Product success created");
        return redirect()->route("products.index");
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
        $product = Product::find($id);
        $data = Armada::orderBy('name')->get(['id', 'name']);
        return view('admin.edit_product')->with('product', $product)->with('data', $data);
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
        request()->validate([
            'name' => 'required',
            'qty_unit' => 'required',
            'price_unit' => 'required',
            'type' => 'required',
            'armada_id' => 'required'
        ]);

        //Menyimpan Data Non Foto
        $updatedata = Product::find($id);
            $updatedata->name = $request->name;
            $updatedata->qty_unit = $request->qty_unit;
            $updatedata->price_unit = $request->price_unit;
            $updatedata->description = $request->description;
            $updatedata->type = $request->type;
            $updatedata->armada_id = $request->armada_id;
            $updatedata->save();

        //Menyimpan Foto
        if ( !empty( $request->file('foto') ) ){
            $data = Product::find($id);
            \File::delete('img/product/'.$data->foto);

            $image = $request->file('foto');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/img/product');
            $image->move($destinationPath, $name);
        }

        Session::flash("success", "Product success updated");
        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        \File::delete('img/product/'.$data->foto);

        Product::destroy($id);
        Session::flash("notice", "Product success deleted");
        return redirect()->route("products.index");
    }

    public function katalogproduct(){
        $data = Product::all();
        return view("user.katalogproduct")->with('data', $data);
    }
}
