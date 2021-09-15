<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Tempat;

class Inventaris extends Model
{
    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
