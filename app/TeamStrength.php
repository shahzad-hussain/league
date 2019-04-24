<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamStrength extends Model
{
    protected $table = 'team_strengths';
    public $timestamps = false;

    protected $casts = [
        'team_id' => 'int',
        'is_home' => 'bool'
    ];

    protected $fillable = [
        'team_id',
        'is_home',
        'strength'
    ];
}
