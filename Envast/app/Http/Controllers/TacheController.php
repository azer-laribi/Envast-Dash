<?php

namespace App\Http\Controllers;
use App\Tache;
use App\User;
use App\Projet;

use Illuminate\Http\Request;

class TacheController extends Controller
{
  public function index()

  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    return view('admin.tache.index',compact('users','Tache','Projet'));
  }
  public function create(){
    $users = User::all();
    $Projet = Projet::all();
    return view('/Tache',compact('users','Project'));
  }
  public function store(Request $request)
  {


    $tache = new Tache();
    $tache->user_id = $request->input('user_id');
    $tache->tache_name = $request->input('tache_name');
    $tache->tache_description = $request->input('tache_description');
    $tache->status = 0;
    $tache->projet_id = $request->input('projet_id');
    $tache->start_date = $request->input('start_date');
    $tache->end_date = $request->input('end_date');
    $tache->save();
    return redirect('/Tache')->with('status','Your Tache is updated');
  }
  public function editTache($id){

    $tache = Tache::findOrFail($id);
    $users= User::all();
    $Projet= Projet::all();
    return view('admin.tache.edit',compact('users','tache','Projet'));
  }
  public function updateTache(Request $request, $id){

    $tache = Tache::findOrFail($id);
    $tache->user_id = $request->input('user_id');
    $tache->tache_name = $request->input('tache_name');
    $tache->tache_description = $request->input('tache_description');
    $tache->Projet_id = $request->input('projet_id');
    $tache->start_date = $request->input('start_date');
    $tache->end_date = $request->input('end_date');
    $tache->update();
    return redirect('/Tache')->with('status','Your Tache is updated');
  }
    public function delete(Request $request, $id)
    {
      $tache = Tache::findOrFail($id);
      $tache->delete();
      return redirect('/Tache')->with('status','Your tache is deleted');
    }
    public function pause($id)
    {
        $tache = tache::findOrFail($id);
        if ($tache->status == 0) {
            $tache->status = 1;
            $tache->save();
        }
        return redirect()->route('admin.tache.index')->with('accepted',true);

    }
    public function Relance($id)
    {

        $tache = tache::findOrFail($id);
        if ($tache->status == 1) {
            $tache->status = 0;
            $tache->save();
        }
        return redirect()->route('admin.tache.index')->with('accepted',true);

    }
    public function terminer($id)
    {
        $tache = tache::findOrFail($id);
        if ($tache->status == 0) {
          $tache->status = 2;
            $tache->save();
        }
        return redirect()->route('admin.tache.index')->with('accepted',true);

    }
    public function refresh($id)
    {
        $tache = tache::findOrFail($id);
        if ($tache->status == 2) {
          $tache->status = 0;
            $tache->save();
        }
        return redirect()->route('admin.tache.index')->with('accepted',true);

    }
}
