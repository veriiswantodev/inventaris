<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    use HasFactory;
    
    protected $table = 'ruang';
    
    protected $fillable = ['nama_ruang', 'kode_ruang', 'keterangan'];
}
