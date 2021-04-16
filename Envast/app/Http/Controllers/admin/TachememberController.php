<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Envast;

class TacheController extends Controller
{
  public function index()
  {
    $Tache = Envast::all();
    return view('admin.Tache')->with('Tache',$Tache);
  }

}
