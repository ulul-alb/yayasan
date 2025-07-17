<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {
    use HasFactory;

    protected $table = 'program';

    protected $fillable = [
        'kategori_program_id',
        'title',
        'slug',
        'thumbnail',
        'image',
        'short_desc',
        'about',
        'nominal_request',
        'nominal_approved',
        'approved_at',
        'approved_by',
        'end_date',
        'is_publish',
        'is_recommended',
        'is_show_home',
        'is_urgent',
        'count_amount_page',
        'count_view',
        'count_pra_checkout',
        'count_read_more',
        'optimation_fee',
        'show_minus',
        'donate_sum',
        'donate_sum_last_updated',
        'is_islami',
        'status',
        'created_by',
        'updated_by'
    ];



    public function kategoriProgram()
    {
        return $this->belongsTo(ProgramCategory::class, 'kategori_program_id');
    }

    public function relawan()
    {
        return $this->belongsToMany(Relawan::class, 'program_relawan');
    }


}

