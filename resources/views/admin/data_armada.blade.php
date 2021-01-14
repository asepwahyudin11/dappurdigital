@extends('layouts.app2', ['class' => 'bg-default'])

@section('content')
    <h1 class="mt-4">Data Armada</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Armada</li>
        </ol>
        <div class="mb-4">
            {!! link_to(route("armadas.create"), "Tambah", ["class"=>"btn btn-raised btn-primary"]) !!}
        </div>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Daftar Armada BINUS Travel</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $data)
                                <tr>
                                    <td>{!! $no+1 !!}</td>
                                    <td>{!! $data->name !!}</td>
                                    <td>{!! $data->location !!}</td>
                                    <td>{!! $data->description !!}</td>
                                    <td>
                                    {!! Form::open(['route' => ['armadas.destroy', $data->id], 'class' => 'formhorizontal', 'role' => 'form', 'method' => 'delete']) !!} 
                                        {!! link_to(route("armadas.edit", $data->id), "Edit", ["class"=>"btn btn-raised btn-success"]) !!} 
                                        <button type="submit" onClick="return confirm('Apakah anda yakin ingin menghapus armada?')" class="btn btn-raised btn-danger">Delete</button>
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection