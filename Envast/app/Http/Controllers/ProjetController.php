<?php

namespace App\Http\Controllers;

use App\User;
use App\Projet;
use App\Membre;
use App\Tache;


use Illuminate\Http\Request;

class ProjetController extends Controller
{
  public function index()
  {
    $users = User::all();
    $Projet = Projet::all();
    $member = Membre::all();
    return view('admin.projet.index',compact('users','Projet','member'));
  }
  public function create(){
    $users = User::all();
    $projet = projet::all();
    $member = Member::all();
    return view('/Projet',compact('users','projet','member'));
  }
  public function store(Request $request)
  {
    $projet = new Projet();
    $projet->project_name = $request->input('project_name');
    $projet->project_description = $request->input('project_description');
    $projet->project_deadline = $request->input('project_deadline');
    $projet->user_id = $request->input('user_id');
    $projet->save();
    return redirect('/Projet')->with('status','Your projet is updated');
  }
  public function editProjet($id){
    $projet = Projet::findOrFail($id);
    $users= User::all();
    $Projet= Projet::all();
    return view('admin.projet.edit',compact('users','projet','Projet'));
  }
  public function updateProjet(Request $request, $id){

    $projet = Projet::find($id);
    $projet->project_name = $request->input('project_name');
    $projet->project_description = $request->input('project_description');
    $projet->project_deadline = $request->input('project_deadline');
    $projet->user_id = $request->input('user_id');
    $projet->update();
    return redirect('/Projet')->with('status','Your projet is updated');
  }


    public function delete(Request $request, $id)
    {
      $projet = Projet::findOrFail($id);
      $projet->delete();
      return redirect('/Projet')->with('status','Your projet is deleted');
    }
    public function pause($id)
    {
        $projet = Projet::findOrFail($id);
        if ($projet->status == 0) {
            $projet->status = 1;
            $projet->save();
        }
        return redirect()->route('admin.projet.index')->with('accepted',true);

    }
    public function Relance($id)
    {

        $projet = Projet::findOrFail($id);
        if ($projet->status == 1) {
            $projet->status = 0;
            $projet->save();
        }
        return redirect()->route('admin.projet.index')->with('accepted',true);

    }
    public function terminer($id)
    {
        $projet = Projet::findOrFail($id);
        if ($projet->status == 0) {
          $projet->status = 2;
            $projet->save();
        }
        return redirect()->route('admin.projet.index')->with('accepted',true);

    }
    public function refresh($id)
    {
        $projet = Projet::findOrFail($id);
        if ($projet->status == 2) {
          $projet->status = 0;
            $projet->save();
        }
        return redirect()->route('admin.projet.index')->with('accepted',true);

    }

    public function AddMembre(Request $request){

      $member = new Membre;
      $member->projet_id = $request->input('projet_id');
      $member->user_id = $request->input('user_id');
      $member->save();
      return redirect('/Projet')->with('status','Your projet is updated');
    }
    public function deleteMember(Request $request, $id)
    {
      $member = Membre::findOrFail($id);
      $member->delete();
      return redirect('/Projet')->with('status','Your projet is deleted');
    }



}
