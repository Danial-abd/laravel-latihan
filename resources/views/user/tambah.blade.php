@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data User</div>

                <div class="card-body">
                <form action="{{route('save.user')}}" method="post" class="form-item">
                @csrf 
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">Nama User</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" placeholder="Masukkan email">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputPassword" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                            @error('password') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan">Simpan</button>
                                <a href="{{route('user')}}" class="btn btn-sm btn-light ">Batal</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
