<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempat';

    protected $fillable = ['nama'];

    public function inventaris(){
        return $this->hasMany(Inventaris::class);
    }
}
