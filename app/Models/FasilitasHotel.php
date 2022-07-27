<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    protected $table = "fasilitas_hotels";
    protected $guarded = [];


    // public function kamar()
    // {
    //     return $this->belongsTo(Kamar::class);
    // }
}
