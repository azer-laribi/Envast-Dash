<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Projet;
use App\Membre;
use App\Tache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
  public function index()
  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    $member = Membre::all();
    return view('Member.DashboardMember',compact('users','Projet','member','Tache'));
  }
  public function profile()

  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    return view('Member.user',compact('users','Tache','Projet'));
  }
  public function tacheIndex(){
    $user = Auth::user();
    $Taches = $user->taches;
    $Projet = Projet::all();
    return view('Member.Tache.index',compact('user','Taches','Projet'));
  }
  public function create(){
    $users = User::all();
    $Projet = Projet::all();
    return view('/tacheMembre',compact('users','Project'));
  }
  public function store(Request $request)
  {


    $tache = new Tache();
    $tache->user_id = Auth::user()->id;
    $tache->tache_name = $request->input('tache_name');
    $tache->tache_description = $request->input('tache_description');
    $tache->status = 0;
    $tache->projet_id = $request->input('projet_id');
    $tache->start_date = $request->input('start_date');
    $tache->end_date = $request->input('end_date');
    $tache->save();
    return redirect('/tacheMembre')->with('status','Your Tache is updated');
  }
}
