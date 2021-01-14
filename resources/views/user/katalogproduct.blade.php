@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h3>Katalog Product</h3>
                </div>
                <div class="col-md-3 mt-md-0 mt-3"></div>
            </div>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
                <li class="breadcrumb-item active">Katalog Product</li>
            </ol>

            <hr />
            <div>
                <a href="{{ route('cekdata') }}"><button type="button" class="btn btn-warning">Cek Order</button></a>
            </div>

            <div class="row">
            @foreach($data as $no => $data)
                <div class="col-md-3 mt-4">
                    <div class="card border-0 shadow">
                        <img src="img/product/{{ $data->foto }}" class="card-img-top" alt="Member 6">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0"><b>{!! $data->name !!}</b></h6>
                            <div class="card-text text-black-50" style="font-size:14px;">{!! $data->description !!}</div>
                            <hr />
                            <div><b>{!! $data->qty_unit !!} Unit</b> tersedia</div>
                            <div>Harga / unit : <b>{!! $data->price_unit !!}</b></div>
                            {!! link_to(route("ordertahap1", $data->id), "Order Item", ["class"=>"btn btn-block btn-info mt-2"]) !!}
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection