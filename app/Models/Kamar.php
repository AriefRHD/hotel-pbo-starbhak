<?php

namespace App\Models;

use App\Models\Pemesanan;
use App\Models\FasilitasHotel;
use App\Models\FasilitasKamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    protected $table = "kamars";
    protected $guarded = [];

    public function pemesanan()
    {
        return $this->hasOne(Pemesanan::class);
    }
    public function fasilitaskamar()
    {
        return $this->hasOne(FasilitasKamar::class);
    }
    public function fasilitashotel()
    {
        return $this->hasOne(FasilitasHotel::class);
    }
}
