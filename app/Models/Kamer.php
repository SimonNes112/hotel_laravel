<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamer extends Model
{
    protected $fillable = [
        "naam_kamer",
        "foto_kamer",
        "nummer_kamer",
        "oppervlakte_kamer",
        "minibar_kamer",
        "persoonen_kamer",
        "bad_kamer",
        "prijs_kamer"];

    use HasFactory;
}
