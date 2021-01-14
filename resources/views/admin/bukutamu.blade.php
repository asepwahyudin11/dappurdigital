@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Buku Tamu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Buku Tamu</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Rekap Buku Tamu BINUS Travel</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Tipe Armada</th>
                                <th>Tgl Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $data)
                                <tr>
                                    <td>{!! $no+1 !!}</td>
                                    <td>{!! $data->name !!}</td>
                                    <td>{!! $data->address !!}</td>
                                    <td>{!! $data->email !!}</td>
                                    <td>{!! $data->no_telp !!}</td>
                                    <td>{!! $data->information !!}</td>
                                    <td>{!! $data->type !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection