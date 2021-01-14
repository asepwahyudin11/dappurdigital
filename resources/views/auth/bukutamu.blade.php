@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h3>Form Registrasi Buku Tamu</h3>
                    <p>Silahkan isi beberapa form berikut. Setelah mengisi, tim kami akan menghubungi anda secepatnya.</p>
                </div>
                <div class="col-md-3 mt-md-0 mt-3"></div>
            </div>

            {!! Form::open(['route' => 'simpan_tamu', 'class' => 'formhorizontal', 'role' => 'form']) !!} 
            <div class="row mt-3">
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="information" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kebutuhan Armada</label>
                        <select class="form-control" name="type" required>
                            <option value="">Pilih Armada</option>
                            <option>Double Decker Bus</option>
                            <option>Minibus</option>
                            <option>Sleeper Bus</option>
                            <option>Van</option>
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-info">Simpan Data</button>
                <a href="report_tamu"><button type="button" class="btn btn-success">Report Tamu</button></a>
            </div>
            {!! Form::close() !!} 
        </div>
    </section>
@endsection