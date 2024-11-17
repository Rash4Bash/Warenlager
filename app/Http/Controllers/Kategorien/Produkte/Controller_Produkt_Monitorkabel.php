<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitorkabel extends Model
{
    use HasFactory;

    protected $fillable = ['a_nr', 'bezeichnung', 'merkmal', 'anzahl'];
}
