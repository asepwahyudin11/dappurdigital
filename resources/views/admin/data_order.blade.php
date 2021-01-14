@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Data Order</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Order</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Daftar Order BINUS Travel</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Tujuan</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $data)
                                <tr>
                                    <td>{!! $no+1 !!}</td>
                                    <td>{!! $data->name !!}</td>
                                    <td>{!! $data->email !!}</td>
                                    <td>{!! $data->no_telp !!}</td>
                                    <td>{!! $data->tujuan !!}</td>
                                    <td>{!! $data->date_from !!} to {!! $data->date_from !!}</td>
                                    <td>
                                        {!! link_to(route("orders.show", $data->id), "Detail", ["class"=>"btn btn-raised btn-info"]) !!} 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection