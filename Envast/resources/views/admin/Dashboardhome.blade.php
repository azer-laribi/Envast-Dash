@extends('layouts.master')

@section('title')
  Envast Dashboard | Home
@endsection


@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card  card-tasks">
      <div class="card-header ">
        <h5 class="card-category">Taches</h5>
        <h4 class="card-title">Tache Lancée(s)</h4>
      </div>
      <div class="card-body ">
        <div class="table-full-width table-responsive">
          <table class="table">
            <tbody>
              @foreach($Tache as $tache)
                @if($tache->status == 0)
                <tr>
                  <td>
                    <div class="form-check">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-1_check"></i>
                      </button>
                    </div>
                  </td>
                  <td class="text-center">{{$tache->tache_name}}</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons users_single-02"></i>
                    </button>
                  </td>
                  <td class="text-center">{{$tache->user->name}}</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons design_bullet-list-67"></i>
                    </button>
                  </td>
                </tr>
                @else
                <tr>
                  <td>
                    <div class="form-check">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </div>
                  </td>
                  <td class="text-center">aucune tache lancer</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons design_bullet-list-67"></i>
                    </button>
                  </td>
                </tr>
                @endif
              @endforeach
            </tbody>
          </table>
          <hr>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-6">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-category">Taches</h5>
          <h4 class="card-title">Tache(s) Terminée(s)</h4>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                @foreach($Tache as $tache)
                  @if($tache->status == 2)
                  <tr>
                    <td>
                      <div class="form-check">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons ui-1_check"></i>
                        </button>
                      </div>
                    </td>
                    <td class="text-center">{{$tache->tache_name}}</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons users_single-02"></i>
                      </button>
                    </td>
                    <td class="text-center">{{$tache->user->name}}</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                      </button>
                    </td>
                  </tr>
                  @else
                  <tr>
                    <td>
                      <div class="form-check">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                      </div>
                    </td>
                    <td class="text-center">aucune tache terminer</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                      </button>
                    </td>
                  </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
            <hr>
          </div>
        </div>
      </div>
    </div>


      <div class="col-md-6">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Projet</h5>
            <h4 class="card-title">Projet(s) Terminé(s)</h4>
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  @foreach($Projet as $projet)
                    @if($projet->status == 2)
                    <tr>
                      <td>
                        <div class="form-check">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-1_check"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-center">{{$projet->project_name}}</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons users_single-02"></i>
                        </button>
                      </td>
                      <td class="text-center">{{$projet->user->name}}</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                        </button>
                      </td>
                    </tr>
                    @else
                    <tr>
                      <td>
                        <div class="form-check">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-center">aucun Projet terminé</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                        </button>
                      </td>
                    </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Projet</h5>
            <h4 class="card-title">Projet(s) Lancé(s)</h4>
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  @foreach($Projet as $projet)
                    @if($projet->status == 0)
                    <tr>
                      <td>
                        <div class="form-check">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-1_check"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-center">{{$projet->project_name}}</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons users_single-02"></i>
                        </button>
                      </td>
                      <td class="text-center">{{$projet->user->name}}</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                        </button>
                      </td>
                    </tr>
                    @else
                    <tr>
                      <td>
                        <div class="form-check">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </div>
                      </td>
                      <td class="text-center">aucune Projet Lancé</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                        </button>
                      </td>
                    </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
              <hr>
            </div>
          </div>
        </div>
      </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-category">Liste de toutes les employés</h5>
        <h4 class="card-title">Employés</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th class="text-center">Nom</th>
              <th class="text-center">Email</th>
              <th class="text-center">Num de Tel</th>
              <th class="text-center">Statut</th>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                    <td class="text-center"> {{$user->name}} </td>
                    <td class="text-center"> {{$user->email}} </td>
                    <td class="text-center"> {{$user->phone}} </td>
                    <td class="text-center"> {{$user->usertype}} </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
