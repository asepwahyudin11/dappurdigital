@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Tambah Data Armada</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('armadas.index') }}">Armada</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
        <div class="mb-4">
            <hr>
        </div>
        <div class="mb-4">
            {!! Form::open(['route' => 'armadas.store', 'class' => 'formhorizontal', 'role' => 'form']) !!} 
                <p>
                    <div class="form-group">
                        <label>Nama</label>
                        {!! Form::text('name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('name') !!}</div>
                    </div>
                    <div class="form-group">
                        <label class="mt-2">Lokasi Armada</label>
                        {!! Form::text('location', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('location') !!}</div>
                    </div>
                    <div class="form-group">
                        <label class="mt-2">Deskripsi</label>
                        {!! Form::textarea('description', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('description') !!}</div>
                    </div>

                    <hr>

                    <button type="submit" class="pull-right btn btn-raised btn-primary">Simpan</button>
                    <button type="reset" class="pull-right btn btn-raised btn-danger">Batal</button>                    
                </p>
            {!! Form::close() !!} 
        </div>
@endsection