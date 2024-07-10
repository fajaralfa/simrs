<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [ 'unit_kerja_id', 'kode', 'nama' ];

    public function unit_kerja(): BelongsTo
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
