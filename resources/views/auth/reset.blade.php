@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-md-0 mt-3">
                    <div class="card border-0 shadow mt-5">
                        <div class="card-body bg-light">
                            <div class="form-group">
                                Masukkan nomor ponsel Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
                            </div>
                            <div class="form-group">
                                <label>No Ponsel</label>
                                <input type="text" name="nomor" class="form-control" placeholder="0812xxxxxxxx">
                            </div>
                            <div class="form-group">
                                <a href="">Lupa kata sandi</a>
                            </div>
                            <button type="button" class="btn btn-primary btn-block">Atur Ulang Kata Sandi</button>
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