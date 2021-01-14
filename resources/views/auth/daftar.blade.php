@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-md-0 mt-3">
                    <div class="card border-0 shadow mt-5">
                        <div class="text-center pt-3 pb-3">
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Masuk</button></a>
                            <button type="button" class="btn btn-light disabled">Daftar</button>
                        </div>
                        <div class="card-body bg-light">
                            {!! Form::open(['route' => 'simpan_user', 'class' => 'formhorizontal', 'role' => 'form']) !!}
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="contoh: Imam Sutono">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="contoh: imam@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="masukkan kata sandi">
                            </div>
                            <div class="form-group">
                                <label>Ulangi Kata Sandi</label>
                                <input type="password" name="repassword" class="form-control" placeholder="masukkan kata sandi">
                            </div>
                            @if ($message = Session::get('error'))
                                <div class="form-group">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <h1 class="text-primary">Dapatkan armada travel terbaik disini!</h1>
                    <p>Kami menawarkan armada travel yang berkualitas dan bisa Anda sewa dengan harga yang terjangkau.</p>
                    <div>
                        <img src="img/login.png" style="width:90%">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection