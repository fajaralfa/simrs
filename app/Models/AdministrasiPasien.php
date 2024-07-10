<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AdministrasiPasien extends Model
{
    use HasFactory;

    protected $table = 'administrasi_pasien';

    protected $fillable = [
        'pasien_id',
        'user_id',
        'total_biaya',
        'bayar',
        'status_pembayaran',
    ];

    public function formatted_total_biaya()
    {
        return "Rp. " . number_format($this->total_biaya, 2, ',', '.');
    }

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tindakan_medis(): BelongsToMany
    {
        return $this->belongsToMany(TindakanMedis::class, 'tindakan_yang_dilakukan');
    }

    public function obat(): BelongsToMany
    {
        return $this->belongsToMany(Obat::class, 'obat_yang_dibutuhkan');
    }

    public function pegawai(): BelongsToMany
    {
        return $this->belongsToMany(Pegawai::class, 'pegawai_yang_menangani');
    }
}
