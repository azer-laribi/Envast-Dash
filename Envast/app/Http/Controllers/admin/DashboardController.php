<?php

namespace App\Http\Controllers\Admin;

use App\Tache;
use App\User;
use App\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index()

  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    return view('admin.Dashboardhome',compact('users','Tache','Projet'));
  }
  public function profile()

  {
    $users = User::all();
    $Tache = Tache::all();
    $Projet = Projet::all();
    return view('admin.user',compact('users','Tache','Projet'));
  }

    public function registred(){
      $users = User::all();
        return view('admin.registremember')->with('users',$users);
    }
    public function registeredit(Request $requests, $id)
    {
      $users = User::findOrFail($id);
      return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id)
    {
      $users = User::find($id);
      $users->usertype = $request->input('usertype');
      $users->email = $request->input('email');
      $users->phone = $request->input('phone');
      $users->post = $request->input('post');
      $users->update();
      return redirect('/registremember')->with('status','Your data is updated');
    }
    public function registerdelete(Request $request, $id)
    {
      $users = User::findOrFail($id);
      $users->delete();
      return redirect('/registremember')->with('status','Your data is updated');
    }
    public function store(Request $request)
    {
      $users = new User();
      $users->Project_name = $request->input('Project_name');
      $users->Project_description = $request->input('Project_description');
      $users->deadline = $request->input('deadline');

      $users->save();
      return redirect('/Tache')->with('status','Your data is updated');
    }
    public function updateProfile(){
      $users = new User();
      $users->usertype = $request->input('usertype');
      $users->email = $request->input('email');
      $users->phone = $request->input('phone');
      $users->post = $request->input('post');
      $users->update();
      return redirect('/profile')->with('status','Your data is updated');
    }
}
