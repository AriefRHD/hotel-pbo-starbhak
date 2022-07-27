<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{

    protected $table = "fasilitas_kamars";
    protected $guarded = [];


    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
