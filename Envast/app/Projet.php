<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tache;
use App\Membre;
class Projet extends Model
{
  public function taches()
      {
          return $this->belongsTo(Tache::class);
      }
      public function user()
          {
              return $this->belongsTo(User::class);
          }
          public function membre()
              {
                  return $this->hasMany(Membre::class);
              }
}
