@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h3>Laporan Booking</h3>
                    <p>Berikut laporan booking untuk pemesanan dengan <b>ID : {!! session('cekdata') !!}</b>.</p>
                </div>
                <div class="col-md-3 mt-md-0 mt-3"></div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3>Data Anda</h3>
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="35%">Nama Lengkap</td>
                                        <td>{!! $order->name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{!! $order->email !!}</td>
                                    </tr>
                                    <tr>
                                        <td>No Handphone</td>
                                        <td>{!! $order->no_telp !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{!! $order->alamat !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3>Data Event Anda</h3>
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="35%">Dari Tanggal</td>
                                        <td>{!! $order->date_from !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Sampai Tanggal</td>
                                        <td>{!! $order->date_to !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Titik Jemput</td>
                                        <td>{!! $order->titik_jemput !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>{!! $order->tujuan !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3>Info Armada</h3>
                            <hr />
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="/img/product/{{ $product->foto }}" width="100%">
                                </div>
                                <div class="col-md-7">
                                    <h3>{!! $product->name !!}</h3>
                                    <h6>{!! $product->description !!}</h6>
                                    <span>Harga/Unit : <b>Rp. {!! $product->price_unit !!},-</b></span>
                                </div>
                            </div>
                            <div class="mt-3"><b><i>Ketersediaan Armada di Tanggal Anda:</i></b></div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="35%">Tanggal</td>
                                        <td>{!! $order->date_from !!} - {!! $order->date_to !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td class="text-primary"><h3>{!! $order->status !!}</h3></td>
                                    </tr>
                                    <tr>
                                        <td>Qty Unit</td>
                                        <td>{!! $orderitem->qty_unit !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection