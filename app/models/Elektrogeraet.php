<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elektrogeraet extends Model
{
    use HasFactory;

    // Legt fest, welche Felder in der Datenbank massenhaft befüllbar sind
    protected $fillable = [
        'bezeichnung',
        'anzahl',
    ];
}
