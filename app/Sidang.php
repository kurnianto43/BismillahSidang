<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidang extends Model
{
    protected $fillable =['nama_mahasiswa', 'npm', 'jurusan', 'no_hp'];
}
