@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mata Kuliah</div>

                <div class="card-body">
                <form action="{{ route('updt.makul',$makul->id) }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="kd_makul">Kode Makul</label>
                                <input type="text" name="kd_makul" class="form-control" placeholder="Masukkan Kode Makul" value="{{ is_null ($makul) ? '' : ($makul->kd_makul) }}">
                            </div>
                            <div class="col">
                                <label for="nama_makul">Nama Mata Kuliah</label>
                                <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Mata Kuliah" value="{{ is_null ($makul) ? '' : ($makul->nama_makul) }}">
                            </div>
                            <div class="col">
                                <label for="sks">SKS</label>
                                <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS" value="{{ is_null ($makul) ? '' : ($makul->sks) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan">Simpan</button>
                                <a href="{{ route('makul') }}" class="btn btn-sm btn-light ">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
