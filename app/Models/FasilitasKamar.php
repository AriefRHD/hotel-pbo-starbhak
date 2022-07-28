<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FasilitasKamar extends Model
{

    protected $table = "fasilitas_kamars";
    protected $fillable = ['tipe_kamar_id','nama_fasilitas'];

    public function kamars()
    {
        return $this->belongsTo(Kamar::class);
    }
}
