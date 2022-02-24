<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['kopi', 'asal', 'proses', 'roasting', 'harga']; // nilai yang di array boleh di isi
    // $guarded = ['kopi', 'asal', 'proses', 'roasting', 'harga']; // Nilai yang ada di dalam array ini tidak boleh di isi
}
