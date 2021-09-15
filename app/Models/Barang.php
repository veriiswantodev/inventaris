<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventaris;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = ['nama', 'merk'];

    public function inventaris(){
        return $this->belongsTo(Inventaris::class);
    }
}
