<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public $timestamps = false;

    protected $casts = [
        'week_id' => 'int',
        'home' => 'int',
        'away' => 'int'
    ];

    protected $fillable = [
        'week_id',
        'home',
        'away'
    ];
}
