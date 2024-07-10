<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakanMedis extends Model
{
    use HasFactory;

    protected $table = 'tindakan_medis';

    protected $fillable = [ 'kode', 'tindakan_medis', 'biaya' ];
}
