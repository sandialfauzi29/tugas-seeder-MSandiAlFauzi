<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'dosen_id'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}