@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Selamat Datang Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-light mb-4">
                <div class="card-body" style="font-size:62px">{!! $count_hari !!}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    Kunjungan Hari Ini <b>{!! date("d M Y"); !!}</b>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-light mb-4">
                <div class="card-body" style="font-size:62px">{!! $count_bulan !!}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    Kunjungan Per Bulan <b>{!! date("F"); !!}</b>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-light mb-4">
                <div class="card-body" style="font-size:62px">{!! $count_tahun !!}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    Kunjungan Per Tahun <b>{!! date("Y"); !!}</b>
                </div>
            </div>
        </div>
    </div>
@endsection