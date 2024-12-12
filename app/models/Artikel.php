<?php

namespace App\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Legt fest, welche Felder in der Datenbank massenhaft befüllbar sind
    protected $fillable = [
         'kategorie',
         'artikel_nummer',
         'beschreibung',
         'datetime',
         'anzahl'];

}
