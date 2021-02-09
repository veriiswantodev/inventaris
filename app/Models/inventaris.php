<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ruang;
use App\Models\jenis;

class inventaris extends Model
{
    protected $table = 'inventaris';
    
    protected $fillable = ['nama', 'kondisi', 'keterangan', 'jumlah', 'jenis_id', 'tanggal_register', 'ruang_id', 'kode_inventaris', 'petugas_id'];
    
    public function ruang(){
        return $this->belongsTo(Ruang::class);
    }
    
    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }
}
