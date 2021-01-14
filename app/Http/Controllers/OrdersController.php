<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, DB, Hash, DateInterval, DatePeriod;
use App\Order, App\OrderItem, App\Product;

class OrdersController extends Controller
{

    public function ordertahap1($id)
    {
        return view("user.formorder1")->with('id', $id);
    }

    public function ordertahap2($id)
    {
        $product = Product::where('id', $id)->first();
        $order = Order::where('id', session('id_order'))->first();

        return view("user.formorder2")->with('id', $id)->with('product', $product)->with('order', $order);
    }

    public function simpantahap1(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'titik_jemput' => 'required',
            'tujuan' => 'required'
        ]);

        //Menyimpan Data
        $id = Order::create($request->all())->id;
        Session::put('id_order', $id);

        $kode = $request->kode;
        Session::flash("success", "Data berhasil disimpan");
        return redirect()->route("ordertahap2", $kode);
    }

    public function simpantahap2(Request $request)
    {
        request()->validate([
            'qty_unit' => 'required'
        ]);

        //Menyimpan Data
        $kode = $request->kode;
        $product = Product::where('id', $kode)->first();
        $harga = $product->price_unit * $request->qty_unit;

        $newdata = new OrderItem;
        $newdata->qty_unit = $request->qty_unit;
        $newdata->total = $harga;
        $newdata->order_id = session('id_order');
        $newdata->product_id = $kode;
        $newdata->save();

        $updateorder = Order::find(session('id_order'));
            $updateorder->total_harga = $harga;
            $updateorder->status = "Proses";
            $updateorder->save();

        
        Session::put('cekdata', session('id_order'));
        Session::forget('id_order');

        Session::flash("success", "Data berhasil disimpan");
        return redirect()->route("cekdata");
    }

    public function updatestatus(Request $request)
    {
        $updatestatus = Order::find($request->id);
            $updatestatus->status = $request->status;
            $updatestatus->save();

        Session::flash("success", "Data berhasil disimpan");
        return redirect()->route("orders.show", $request->id);
    }

    public function cekdata()
    {
        $order = Order::where('id', session('cekdata'))->first();
        $orderitem = OrderItem::where('order_id', session('cekdata'))->first();
        $product = Product::where('id', $orderitem->product_id)->first();

        return view("user.cekdata")->with('product', $product)->with('order', $order)->with('orderitem', $orderitem);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Order::all();
        return view("admin.data_order")->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::where('id', $id)->first();
        $orderitem = OrderItem::where('order_id', $id)->first();
        $product = Product::where('id', $orderitem->product_id)->first();

        return view("admin.detail_order")->with('product', $product)->with('order', $order)->with('orderitem', $orderitem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
