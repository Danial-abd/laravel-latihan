@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data User
                <a href="{{ route('tbh.user') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($user as $u)
                                <tr>
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->password}}</td>
                                    <td>
                                        <a href="{{route('edit.user', $u->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('dlt.user', $u->id)}}" class="btn btn-sm btn-danger">Hapus</a>
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