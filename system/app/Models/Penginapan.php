<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;

    protected $table = 'tb_penginapan'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'id_penginapan';

    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'deskripsi',
        'link_map',
        'gambar',
        'id_admin',
    ];

    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'id_penginapan', 'id_penginapan');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
