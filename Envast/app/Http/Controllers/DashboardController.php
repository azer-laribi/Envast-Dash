<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tache;
use App\User;
use App\Projet;

class DashboardController extends Controller
{
  public function index()

  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    return view('admin.Dashboardhome',compact('users','Tache','Projet'));
  }
  public function update(Request $request, $id){

    $projet = Projet::find($id);
    $projet->project_name = $request->input('project_name');
    $projet->project_description = $request->input('project_description');
    $projet->project_deadline = $request->input('project_deadline');
    $projet->user_id = $request->input('user_id');
    $projet->update();
    return redirect('/Projet')->with('status','Your projet is updated');
  }
}
