@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Edit Data Armada</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="../../armadas">Armada</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="mb-4">
            <hr>
        </div>
        <div class="mb-4">
            {!! Form::model($armada, ['route' => ['armadas.update', $armada->id], 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form']) !!} 
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

                    <button type="submit" class="pull-right btn btn-raised btn-primary">Simpan Perubahan</button>
                    <button type="reset" class="pull-right btn btn-raised btn-danger">Batal</button>                    
                </p>
            {!! Form::close() !!} 
        </div>
@endsection