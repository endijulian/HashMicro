<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stnk extends Model
{
    use HasFactory;

    protected $table = 'stnk';
    protected $fillable = [
        'no_stnk',
        'jenis_kendaraans_id',
        'silinder',
        'tnkb',
        'pkb',
        'nama_stnk',
        'nilai_pajak_stnk',
        'no_polisi',
        'model',
        'no_mesin',
        'swdkllj',
        'bahan_bakar',
        'warna',
        'pajak_jasa',
        'merk',
        'no_rangka',
        'masa_berlaku',
        'jasa_perpanjang',
        'tahun_kendaraan',
        'no_bpkb',
        'pajak_stnk',
        'status_id',
        'users_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function jenis_kendaraans()
    {
        return $this->belongsTo(JenisKendaraan::class);
    }
}
