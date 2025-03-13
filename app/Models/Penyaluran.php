<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyaluran;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = 'penyaluran'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nama', 'penerima', 'jumlah_dana', 'tanggal', 'start_date'];
}

