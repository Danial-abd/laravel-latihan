@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('updt.mhs', $mahasiswa->id) }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa }}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="L" {{$mahasiswa->jenis_kelamin == 'L' ? 'selected' : ''}} >Laki-laki</option>
                            <option value="P" {{$mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}">
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
