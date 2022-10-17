<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $fillable = [
        "datum_booking",
        "naam_booking",
        "nummer_booking",
        "adres_booking",
        "creditcard_booking",
        "aankomst_booking",
        "vertrek_booking",
        "kamer_id"];
    use HasFactory;
}
