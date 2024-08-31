<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama', 'jabatan', 'status_kerja'];
    protected $table = 'pendaftarans';
    public function schedule(){
        return $this->belongsTo(Schedule::class, 'pendaftaran_id');
    }
}
