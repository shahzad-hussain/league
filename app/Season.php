<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons';
    public $timestamps = false;

    protected $casts = [
        'finished' => 'bool'
    ];

    protected $fillable = [
        'name',
        'finished'
    ];
}
