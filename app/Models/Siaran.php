<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siaran extends Model
{
    public function notulensi(): HasOne {
        return $this->hasOne(Notulensi::class, 'kode_siaran');
    }

    public function arsip(): HasOne {
        return $this->hasOne(Arsip::class, 'kode_siaran');
    }

    protected $primaryKey = 'kode_siaran';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'kode_siaran',
        'judul',
        'tgl_waktu',
        'nama_penyiar',
        'status'
    ];
}
