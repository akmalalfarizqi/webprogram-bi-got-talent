<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Tambahkan 'kelas' dan 'no_wa' di sini
    protected $fillable = ['user_id', 'lomba_id', 'kelas', 'no_wa', 'status'];

    // 2. Relasi balik ke User (Siswa)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // 3. Relasi balik ke Lomba
    public function lomba() 
    {
        return $this->belongsTo(Lomba::class);
    }
}
