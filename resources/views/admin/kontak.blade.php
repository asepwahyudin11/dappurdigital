@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Kontak Kami</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kontak</li>
    </ol>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <p>Hubungi kami kapan saja, layanan pelanggan kami dengan senang hati mendengar Anda. <i class="fa fa-check"></i></p>
            <div class="text-primary">Telp : (021) 1234567</div>
            <div class="text-primary">Whatsapp : 085730430616</div>
            <div class="text-primary">Email : travel@binus.ac.id</div>
        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-6 mb-md-0 mb-3 text-center">
            <img src="../img/footer.png" style="width:50%">
        </div>
    </div>
@endsection