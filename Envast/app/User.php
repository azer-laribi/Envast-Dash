<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Projet;
use App\Tache;

class User extends Authenticatable
{
  public function taches()
      {
          return $this->hasMany(Tache::class);
      }
  public function projet()
      {
          return $this->hasMany(Projet::class);
      }
        public function membre()
            {
                return $this->belongsTo(Membre::class);
            }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'usertype', 'post', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
