<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    use HasFactory;

    protected $table = 'program_category';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'name',          // Nama kategori
        'slug',
        'sort_number',
        'icon',
        'is_show',
        'created_by',
        'updated_by',
        'lembaga_id'
    ];

    // Jika kamu pakai timestamps
    public $timestamps = true;

    // Relasi ke Program (jika satu kategori bisa punya banyak program)
    public function programs()
    {
        return $this->hasMany(Program::class, 'kategori_id');
    }
}
