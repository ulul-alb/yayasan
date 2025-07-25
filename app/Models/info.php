<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info_program';

    protected $fillable = ['nama_program', 'tanggal', 'detail_proses', 'gambar'];
}
