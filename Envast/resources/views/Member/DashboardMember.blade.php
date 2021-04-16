@extends('layouts.mastermembre')

@section('title')
  Envast Dashboard | Tache member
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
                @if(Auth::user()->id == $tache->user_id)
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
                  <td class="text-center">{{Auth::user()->name}}</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons design_bullet-list-67"></i>
                    </button>
                  </td>
                </tr>
                @endif
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
                    @endif
                  @endforeach
                </tbody>
              </table>
              <hr>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection
