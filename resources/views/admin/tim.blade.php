@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Tentang Tim</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tim</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-md-0 mt-3">
            <p>Kami mempunyai tim berpengalaman yang siap membantu Anda menikmati perjalanan yang tak terlupakan.</p>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member6.jpg" class="card-img-top" alt="Member 6">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Joko Widodo</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">Direktur</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member1.jpeg" class="card-img-top" alt="Member 1">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Asep Wahyudin</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">General Manager</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member2.jpg" class="card-img-top" alt="Member 2">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Ardiansyah Eka</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">Mgr Accounting</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member3.jpg" class="card-img-top" alt="Member 3">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Imam Sutono</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">Mgr Marketing</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member4.jpg" class="card-img-top" alt="Member 4">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Rizal Hamim</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">Manager HRD</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mt-md-0 mt-3">
            <div class="card border-0 shadow">
                <img src="../img/member5.jpg" class="card-img-top" alt="Member 5">
                <div class="card-body text-center">
                    <h6 class="card-title mb-0">Thefan Sunjaya</h6>
                    <div class="card-text text-black-50" style="font-size:14px;">Sales Tour & Travel</div>
                </div>
            </div>
        </div>
    </div>
@endsection