<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Envast extends Model
{
    protected $table = 'envasts';
    protected $fillable = [
        'membre', 'tache', 'description', 'status', 'release date', 'estimation_time',
    ];
}
