@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-md-0 mt-3">
                    <div class="card border-0 shadow mt-5">
                        <div class="text-center pt-3 pb-3">
                            <button type="button" class="btn btn-light disabled">Masuk</button>
                            <a href="{{ route('daftar') }}"><button type="button" class="btn btn-primary">Daftar</button></a>
                        </div>
                        {!! Form::open(['route' => 'proses_login', 'class' => 'formhorizontal', 'role' => 'form']) !!}
                        <div class="card-body bg-light">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="contoh: imam@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="masukkan kata sandi">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Captcha</label>
                                    <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <a href=''><button type="button" class="btn btn-primary btn-refresh">Refresh</button>
                                    </div></a>
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('captcha') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                @if ($message = Session::get('error'))
                                    <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <a href="{{ route('resetpassword') }}">Lupa kata sandi</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        {!! Form::close() !!}
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
    <script type="text/javascript">
        $(".btn-refresh").click(function(){
        $.ajax({
            type:'GET',
            url:'/refresh_captcha',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
        });
    </script>
@endsection