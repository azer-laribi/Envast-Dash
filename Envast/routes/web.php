<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','chef']], function () {
  Route::get('/Dashboard', function () {
      return view('admin.Dashboard');
  });
});

Route::group(['middleware' => ['auth','membre']], function () {
  Route::get('/DashboardMembre', function () {
      return view('Member.DashboardMembre');
  });
  //------------------------Admin-------------------------------------------
  Route::get('/registremember', 'admin\DashboardController@registred');
  Route::get('/role-edit/{id}','admin\DashboardController@registeredit');
  Route::put('/role-register-update/{id}','admin\DashboardController@registerupdate');
  Route::delete('/role-delete/{id}','admin\DashboardController@registerdelete');
  Route::get('/Tache', 'TacheController@index')->name('admin.tache.index');
  Route::get('/profile','admin\DashboardController@profile');
  Route::post('/updateProfile', 'admin\DashboardController@updateProfile');




// ---------------------------TacheController-----------------------------------
  Route::get('/Tache', 'TacheController@index')->name('admin.tache.index');
  Route::get('/Tache-store', 'TacheController@create');
  Route::post('/Tache-store', 'TacheController@store');
  Route::post('/Tache/{id}/pause', 'TacheController@pause')->name('Tache.pause');
  Route::post('/Tache/{id}/Relance', 'TacheController@Relance')->name('Tache.Relance');
  Route::post('/Tache/{id}/terminer', 'TacheController@terminer')->name('Tache.terminer');
  Route::post('/Tache/{id}/refresh', 'TacheController@refresh')->name('Tache.refresh');
  Route::delete('/Tache-delete/{id}','TacheController@delete');
  Route::get('/Tache-edit/{id}','TacheController@editTache');
  Route::put('/Tache-update/{id}','TacheController@updateTache');
// -----------------------------------------------------------------------------



//--------------------------ProjectController-----------------------------------
Route::get('/Projet', 'ProjetController@index')->name('admin.projet.index');
Route::get('/Projet-store', 'ProjetController@create');
Route::post('/Projet-store', 'ProjetController@store');
Route::delete('/Projet-delete/{id}','ProjetController@delete');
Route::get('/Projet-edit/{id}','ProjetController@editProjet');
Route::put('/Projet-update/{id}','ProjetController@updateProjet');
Route::post('/Projet/{id}/pause', 'ProjetController@pause')->name('Projet.pause');
Route::post('/Projet/{id}/Relance', 'ProjetController@Relance')->name('Projet.Relance');
Route::post('/Projet/{id}/terminer', 'ProjetController@terminer')->name('Projet.terminer');
Route::post('/Projet/{id}/refresh', 'ProjetController@refresh')->name('Projet.refresh');
Route::delete('/Projet-delete/{id}','ProjetController@delete');
Route::post('/AddMembre', 'ProjetController@AddMembre');
Route::delete('/deleteMember/{id}','ProjetController@deleteMember');
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------

//----------------------------------------Membre----------------------------------------------------

  Route::get('/DashboardMembre', 'MemberController@index');
  Route::get('/Dashboardhome','admin\DashboardController@index');
  Route::get('/userMembre','MemberController@profile');
  Route::post('/updateProfile', 'admin\DashboardController@updateProfile');
  Route::get('/tacheMembre', 'MemberController@tacheIndex');
  Route::get('/tacheMembre-create', 'MemberController@create');
  Route::post('/tacheMembre-create', 'MemberController@store');

  Route::get('/user', function () {
      return view('admin.user');
  });
  Route::get('/Tachemember', function () {
      return view('admin.Tachemember');
  });

});
