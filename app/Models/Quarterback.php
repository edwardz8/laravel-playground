<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarterback extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'player',
        'cmp',
        'att',
        'pct',
        'yds',
        'ya',
        'td',
        'int',
        'sacks',
        'att',
        'rushyds',
        'rtd',
        'fl',
        'g',
        'fpts',
        'fptsg',
    ];
}
