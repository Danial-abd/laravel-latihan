@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('updt.mhs', $mahasiswa->id) }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}" {{$mahasiswa->user_id == $u->id ? 'selected' : '' }}>{{$u->name}}</option>    
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col">
                                <label for="nama_mahasiswa">NPM</label>
                                <input type="number" name="nama_mahasiswa" class="form-control" maxlength="8" placeholder="Masukkan Nama Mahasiswa" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}">
                            </div>
                            <div class="col">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir}}">
                            </div>
                            <div class="col">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                    <option value="L" {{$mahasiswa->jenis_kelamin == 'L' ? 'selected' : ''}} >Laki-laki</option>
                                    <option value="P" {{$mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="telepon">Telepon</label>
                                <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="2" rows="3" placeholder="Masukkan Alamat" style="resize : none">{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}</textarea>
                            </div>
                        </div>
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
