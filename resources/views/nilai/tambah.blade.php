@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{route('save.nilai')}}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                                    @foreach($mahasiswa as $mhs)
                                        <option value="{{$mhs->id}}">{{$mhs->user->name}}</option>    
                                    @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai</label>
                            <select name="makul_id" id="makul_id" class="form-control">
                                <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                    @foreach($makul as $mk)
                                        <option value="{{$mk->id}}">{{$mk->nama_makul}}</option>    
                                    @endforeach
                            </select>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Nilai</label>
                        <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai">
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan">Simpan</button>
                                <a href="{{route('nilai')}}" class="btn btn-sm btn-light ">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
