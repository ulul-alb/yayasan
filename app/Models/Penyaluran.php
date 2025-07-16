<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyaluran;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = 'program_spend'; 
    protected $fillable = [
        'program_id', 
        'title', 
        'desc_publish', 
        'nominal_request',
        'nominal_approved',
        'date_request',
        'type',
        'is_operational',
        'status',
        'date_approved',
        'transfer_proof',
        'desc_request',
        'ads_campaign_id',
        'updated_by'
    ];
}

