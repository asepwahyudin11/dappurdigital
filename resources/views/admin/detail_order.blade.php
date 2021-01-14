@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Detail Order</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Detail Order</li>
    </ol>
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

            {!! Form::open(['route' => 'updatestatus', 'class' => 'formhorizontal', 'role' => 'form']) !!}
            <div class="card mb-4">
                <div class="card-body bg-light">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <label class="mt-2">Update Status</label>
                        <select name="status" class="form-control">
                            <option value="">Pilih Tipe Armada</option>
                            @if($order->status == "Proses")
                                <option selected>Proses</option>
                            @else
                                <option>Proses</option>
                            @endif

                            @if($order->status == "Lunas")
                                <option selected>Lunas</option>
                            @else
                                <option>Lunas</option>
                            @endif

                            @if($order->status == "Reject")
                                <option selected>Reject</option>
                            @else
                                <option>Reject</option>
                            @endif
                        </select>
                        <div class="text-danger">{!! $errors->first('type') !!}</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="pull-right btn btn-raised btn-primary">Update</button>
            {!! Form::close() !!} 
        </div>
    </div>
@endsection