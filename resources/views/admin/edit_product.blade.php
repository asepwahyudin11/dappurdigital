@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Edit Data Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produk</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="mb-4">
        <hr>
    </div>
    <div class="mb-4">
        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'files'=> true]) !!} 
            <p>
                <div class="form-group">
                    <label>Nama</label>
                    {!! Form::text('name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                    <div class="text-danger">{!! $errors->first('name') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Quantity Unit</label>
                    {!! Form::text('qty_unit', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                    <div class="text-danger">{!! $errors->first('qty_unit') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Price Per Unit</label>
                    {!! Form::text('price_unit', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                    <div class="text-danger">{!! $errors->first('price_unit') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Deskripsi</label>
                    {!! Form::textarea('description', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                    <div class="text-danger">{!! $errors->first('description') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Armada</label>
                    <select name="armada_id" class="form-control">
                        <option value="">Pilih Armada</option>
                        @foreach($data as $no => $data)
                            @if($data->id == $product->armada_id)
                                <option value="{!! $data->id !!}" selected>{!! $data->name !!}</option>
                            @else
                                <option value="{!! $data->id !!}">{!! $data->name !!}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="text-danger">{!! $errors->first('armada_id') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Tipe Armada</label>
                    <select name="type" class="form-control">
                        <option value="">Pilih Tipe Armada</option>
                        @if($product->type == "Double Decker Bus")
                            <option selected>Double Decker Bus</option>
                        @else
                            <option>Double Decker Bus</option>
                        @endif

                        @if($product->type == "Minibus")
                            <option selected>Minibus</option>
                        @else
                            <option>Minibus</option>
                        @endif

                        @if($product->type == "Sleeper Bus")
                            <option selected>Sleeper Bus</option>
                        @else
                            <option>Sleeper Bus</option>
                        @endif

                        @if($product->type == "Van")
                            <option selected>Van</option>
                        @else
                            <option>Van</option>
                        @endif
                    </select>
                    <div class="text-danger">{!! $errors->first('type') !!}</div>
                </div>
                <div class="form-group">
                    <label class="mt-2">Foto</label>
                    {!! Form::file('foto', $attributes = array()) !!}     
                    <div class="text-danger">{!! $errors->first('foto') !!}</div>
                </div>

                <hr>

                <button type="submit" class="pull-right btn btn-raised btn-primary">Simpan</button>
                <button type="reset" class="pull-right btn btn-raised btn-danger">Batal</button>                    
            </p>
        {!! Form::close() !!} 
    </div>
@endsection