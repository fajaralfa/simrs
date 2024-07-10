<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = ['kode', 'nama'];

    public function administrasi_pasien(): HasOne
    {
        return $this->hasOne(AdministrasiPasien::class);
    }
}
