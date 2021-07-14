@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                            @foreach($user as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="number" name="npm" class="form-control" placeholder="Masukkan Nama Mahasiswa">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" cols="2" rows="3" placeholder="Masukkan Alamat" style="resize : none"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan">Simpan</button>
                                <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-light ">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
