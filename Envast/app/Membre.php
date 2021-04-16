<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Projet;
use App\User;

class Membre extends Model
{
  public function projet()
  {
      return $this->belongsTo(Projet::class);
  }
  public function user()
      {
          return $this->hasOne(User::class);
      }
}
