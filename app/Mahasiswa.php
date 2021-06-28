<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected   $table      = 'mahasiswa';
    protected   $fillable   = ['npm','nama_mahasiswa','tempat_lahir','tgl_lahir','jenis_kelamin','telepon','alamat'];
    public      $timestamps = false;
}
