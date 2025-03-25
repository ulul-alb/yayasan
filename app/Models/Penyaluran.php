<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyaluran;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = 'penyaluran'; 
    protected $fillable = ['nama', 'kategori', 'jumlah', 'tanggal'];
}

