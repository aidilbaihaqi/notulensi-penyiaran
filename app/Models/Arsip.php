<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arsip extends Model
{
    public function siaran(): BelongsTo {
        return $this->belongsTo(Siaran::class, 'kode_siaran');
    }

    public $timestamps = false;
    protected $fillable = [
        'kode_siaran',
        'file_rekaman',
        'tgl_upload'
    ];
}
