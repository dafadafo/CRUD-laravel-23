<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';

    //nama field dijaga agar aman
    protected $fillable = ['nama_siswa','nis','kelas','jenis_kelamin','alamat'];  
    
    //jika nama field terlalu banyak,(guarded = tidak ada field yang di jaga)
    protected $guarded = []; 
}
