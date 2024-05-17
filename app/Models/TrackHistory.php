<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackHistory extends Model
{
    use HasFactory;
    protected $table = 'track_histories';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'type',
        'time',
        'date',
        'memo',
        'agency',
        'ip_address',
        'browser',
        'device',
        'platform',
        'location',
        'isDesktop',
        'isPhone'
    ];
}
