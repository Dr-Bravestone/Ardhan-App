<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory, HasUuids;
    protected $table='prodis';

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class,'fakultas_id');
    }
    
}
