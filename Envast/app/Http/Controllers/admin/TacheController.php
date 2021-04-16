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
  public function store(Request $request)
  {
    $envasts = new Envast();

    $envasts->membre = $request->input('membre');
    $envasts->tache = $request->input('tache');
    $envasts->description = $request->input('description');
    $envasts->status = $request->input('status');
    $envasts->Release_date = $request->input('Release_date');
    $envasts->estimation_time = $request->input('estimation_time');
    $envasts->save();
    return redirect('/Tache')->with('status','Your data is updated');
  }
}
