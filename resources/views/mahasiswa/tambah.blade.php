@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Input Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM">
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa">
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
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
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
