@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h3>Form Order | Tahap 2</h3>
                    <p>Silahkan isi beberapa form berikut. Setelah mengisi, anda akan diarahkan pada form berikutnya.</p>
                </div>
                <div class="col-md-3 mt-md-0 mt-3"></div>
            </div>

            {!! Form::open(['route' => 'simpantahap2', 'class' => 'formhorizontal', 'role' => 'form']) !!} 
            <div class="row mt-3">
                <input type="hidden" name="kode" value="{{ $id }}">
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
                                        <td class="text-success"><h3>Tersedia</h3></td>
                                    </tr>
                                    <tr>
                                        <td>Qty Unit</td>
                                        <td>{!! $product->qty_unit !!}</td>
                                    </tr>
                                    <tr class="bg-info">
                                        <td>Unit Dipesan</td>
                                        <td>
                                            {!! Form::number('qty_unit', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                                            <div class="text-danger">{!! $errors->first('qty_unit') !!}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-info">Pesan Sekarang</button>
                <button type="reset" class="btn btn-danger">Batalkan</button>
            </div>
            {!! Form::close() !!} 
        </div>
    </section>
@endsection