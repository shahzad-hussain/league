<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $table= 'weeks';
    public $timestamps = false;

    protected $casts = [
        'season_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'season_id'
    ];
}
