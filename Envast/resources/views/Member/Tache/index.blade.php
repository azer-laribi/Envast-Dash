@extends('layouts.mastermembre')

@section('title')
  Envast Dashboard | Tache
@endsection


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle Tache</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="/tacheMembre-create" method="POST">
        <div class="modal-body">

            {{ csrf_field()}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Tache:</label>
              <input type="text" name="tache_name"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label col-form-label-scrollable">Description:</label>
              <textarea type="text" class="form-control"  name="tache_description" id="recipient-name"></textarea>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Date de Début:</label>
              <input type="date" name="start_date"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Date de Fin:</label>
              <input type="date" name="end_date"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Projet:</label>
              <select name="projet_id" id="inputState" class="form-control">
                <option value="0">choose Project</option>
                @foreach($Projet as $projet)
                    <option value="{{$projet->id}}">{{$projet->project_name}}</option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="now-ui-icons design_bullet-list-67"></i>  Tache <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Tache</button></h4>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
                        <table class="table">
                            <thead class="text-primary">


                            <tr>
                                <th style='text-align:center'>Nom Projet</th>
                                <th style='text-align:center'>Nom Tache</th>
                                <th style='text-align:center'>description</th>
                                <th style='text-align:center'>Date Début</th>
                                <th style='text-align:center'>Date Fin</th>
                                <th style='text-align:center'>Estimation du Nombre de Jours</th>
                                <th style='text-align:center'>statut</th>
                                <th style='text-align:center'>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  @foreach($Taches as $tache)
                                    <td style='text-align:center'>
                                        @foreach($Projet as $projet)
                                          @if($projet->id == $tache->projet_id)
                                          {{$projet->project_name}}
                                          @endif
                                        @endforeach
                                    </td>
                                    <td style='text-align:center'>{{$tache->tache_name}}</td>
                                    <td style='text-align:center'>{{$tache->tache_description}}</td>
                                    <td style='text-align:center'>{{$tache->start_date}}</td>
                                    <td style='text-align:center'>{{$tache->end_date}}</td>
                                    <td style='text-align:center'>{{ \Carbon\Carbon::parse ($tache->start_date)->diffInDays(\Carbon\Carbon::parse ($tache->end_date))}}</td>
                                    <td style='text-align:center'>@if($tache->status==0) lancer @elseif($tache->status==1) pause @else terminer @endif </td>
                                    <td style='text-align:center; width:100%' >
                                        <div class="row" style="display: flex; justify-content: center;">
                                            <br><form action="{{route('Tache.Relance',$tache->id)}}" method="POST"
                                                  class="float-left">
                                                {{ method_field('POST') }}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-warning btn-circle mr-1">
                                                    <i class="fas fa-play"></i> Relance
                                                </button>
                                            </form> <br>
                                            <br> <form action="{{route('Tache.pause',$tache->id)}}" method="POST"
                                                  class="float-left">
                                                {{ method_field('POST') }}

                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger btn-circle mr-1">
                                                    <i class="fas fa-pause"></i> Pauser
                                                </button>
                                            </form><br>
                                            <br><form action="{{route('Tache.terminer',$tache->id)}}" method="POST"
                                                  class="float-left">
                                                {{ method_field('POST') }}

                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-success btn-circle mr-1">
                                                    <i class="fas fa-check"></i> terminer
                                                </button>
                                            </form>
                                            <form action="{{route('Tache.refresh',$tache->id)}}" method="POST"
                                                  class="float-left">
                                                 {{ method_field('POST') }}

                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-info btn-circle mr-1">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i> refresh
                                                </button>
                                            </form>


                                    </td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection


@section('scripts')

@endsection
