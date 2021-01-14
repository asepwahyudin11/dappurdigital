@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h3>Form Order | Tahap 1</h3>
                    <p>Silahkan isi beberapa form berikut. Setelah mengisi, anda akan diarahkan pada form berikutnya.</p>
                </div>
                <div class="col-md-3 mt-md-0 mt-3"></div>
            </div>

            {!! Form::open(['route' => 'simpantahap1', 'class' => 'formhorizontal', 'role' => 'form']) !!} 
            <div class="row mt-3">
                <input type="hidden" name="kode" value="{{ $id }}">
                <input type="hidden" name="status" value="Temporary">
                <input type="hidden" name="total_harga" value="0">
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        {!! Form::text('name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('name') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('email') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        {!! Form::text('no_telp', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('no_telp') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        {!! Form::textarea('alamat', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('alamat') !!}</div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="form-group">
                        <label>Dari Tanggal</label>
                        {!! Form::date('date_from', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('date_from') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>Sampai Tanggal</label>
                        {!! Form::date('date_to', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('date_to') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>Titik Jemput</label>
                        {!! Form::textarea('titik_jemput', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('titik_jemput') !!}</div>
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        {!! Form::textarea('tujuan', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}     
                        <div class="text-danger">{!! $errors->first('tujuan') !!}</div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-info">Simpan & Lanjutkan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
            {!! Form::close() !!} 
        </div>
    </section>
@endsection