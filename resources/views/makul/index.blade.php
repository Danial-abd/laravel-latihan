@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mata Kuliah
                <a href="{{ route('tbh.makul') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Makul</th>
                                    <th>Nama Makul</th>
                                    <th>SKS</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($makul as $mk)
                                <tr>
                                    <td>{{$mk->id}}</td>
                                    <td>{{$mk->kd_makul}}</td>
                                    <td>{{$mk->nama_makul}}</td>
                                    <td>{{$mk->sks}}</td>
                                    <td>
                                        <a href="{{ route('edit.makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('dlt.makul', $mk->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection