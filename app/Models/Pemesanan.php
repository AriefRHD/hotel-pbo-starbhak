<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    protected $table = "pemesanans";
    protected $guarded = [];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
