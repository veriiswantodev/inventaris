<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Tempat;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = ['kode_inventaris', 'jumlah', 'tanggal', 'tempat_id', 'barang_id'];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function tempat(){
        return $this->belongsTo(Tempat::class);
    }
}
