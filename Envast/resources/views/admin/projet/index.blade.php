@extends('layouts.master')

@section('title')
  Envast Dashboard | Project
@endsection


@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau Projet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="/Projet-store" method="POST">
        <div class="modal-body">

            {{ csrf_field()}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Projet:</label>
              <input type="text" name="project_name"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label col-form-label-scrollable">Description:</label>
              <textarea type="text"   name="project_description" class="form-control" id="recipient-name"></textarea>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Date Limite:</label>
              <input type="date" name="project_deadline"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Project Manager:</label>
              <select name="user_id" id="inputState" class="form-control">
                @foreach($users as $user)
                  @if($user->usertype == 'chef')
                    <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
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



<div class="modal fade" id="Membermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre à <i class="now-ui-icons ui-2_settings-90"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="/AddMembre" method="POST">
        <div class="modal-body">

            {{ csrf_field()}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Projet:</label>
              <select name="projet_id" id="inputState" class="form-control">
                <option value="0">choose Project</option>
                @foreach($Projet as $projet)
                    <option value="{{$projet->id}}">{{$projet->project_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label"> Membre du projet:</label>
              <select name="user_id" id="inputState" class="form-control">
                <option value="0">choose Member</option>
                  @foreach($users as $user)
                  @if($user->usertype == 'membre')
                    <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
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
        <h4 class="card-title"><i class="now-ui-icons ui-2_settings-90"></i>  Projet <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Project</button></h4>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <thead class=" text-primary">
              <th style='text-align:center'>Nom </th>
              <th style='text-align:center'>Description</th>
              <th style='text-align:center'>Data Limite</th>
              <th style='text-align:center'>Project Manager</th>
              <th style='text-align:center'>statut</th>
              <th style='text-align:center'>Actions</th>
              <th style='text-align:center'>Modifier</th>
              <th style='text-align:center'>Effacer</th>
            </thead>
            <tbody>
              @foreach($Projet as $projet)
                  <tr>
                      <td style='text-align:center'>{{$projet->project_name}}</td>
                      <td style='text-align:center'>{{$projet->project_description}}</td>
                      <td style='text-align:center'>{{$projet->project_deadline}}</td>
                      <td style='text-align:center'>{{$projet->user->name}}</td>
                      <td style='text-align:center'>@if($projet->status==0) lancer @elseif($projet->status==1) pause @else terminer @endif </td>
                      <td style='text-align:center; width:100%' >
                          <div class="row" style="display: flex; justify-content: center;">
                              <br><form action="{{route('Projet.Relance',$projet->id)}}" method="POST"
                                    class="float-left">
                                  {{ method_field('POST') }}
                                  {{csrf_field()}}
                                  <button type="submit" class="btn btn-outline-warning btn-circle mr-2">
                                      <i class="fas fa-play"></i> Relance
                                  </button>
                              </form> <br>
                              <br> <form action="{{route('Projet.pause',$projet->id)}}" method="POST"
                                    class="float-left">
                                  {{ method_field('POST') }}

                                  {{csrf_field()}}
                                  <button type="submit" class="btn btn-outline-default btn-circle mr-2">
                                      <i class="fas fa-pause"></i> Pauser
                                  </button>
                              </form><br>
                              <br><form action="{{route('Projet.terminer',$projet->id)}}" method="POST"
                                    class="float-left">
                                  {{ method_field('POST') }}

                                  {{csrf_field()}}
                                  <button type="submit" class="btn btn-outline-success btn-circle mr-2">
                                      <i class="fas fa-check"></i> terminer
                                  </button>
                              </form>
                              <form action="{{route('Projet.refresh',$projet->id)}}" method="POST"
                                    class="float-left">
                                  {{ method_field('POST') }}

                                  {{csrf_field()}}
                                  <button type="submit" class="btn btn-outline-info btn-circle mr-2">
                                      <i class="fa fa-refresh" aria-hidden="true"></i> refresh
                                  </button>
                              </form>


                              <td style='text-align:center'><a href="/Projet-edit/{{$projet->id}}" class="btn btn-success" href="#">Modifier</a></td>
                              <td style='text-align:center'>
                                <form  action="/Projet-delete/{{$projet->id}}" method="post">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                                  <button type="submit" class="btn btn-danger">Effacer</button>
                                </form>
                              </td>
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="now-ui-icons ui-2_settings-90"></i>  Projet <button type="button" class="btn btn-info  float-right" data-toggle="modal" data-target="#Membermodal">Add Member</button></h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
          <thead class=" text-primary">
            <th style='text-align:center'>Nom</th>
            <th style='text-align:center'>Membre(s) de Projet</th>
          </thead>
          <tbody>
            @foreach($Projet as $projet)
                <tr>
                    <td style='text-align:center'>{{$projet->project_name}}</td>
                    <td style='text-align:center' class="float-center">
                      @foreach($users as $user)
                        @foreach($member as $members)
                        @if($members->projet_id == $projet->id)
                          @if($members->user_id == $user->id)
                              {{$user->name}}
                              <form  action="/deleteMember/{{$members->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-info btn-round btn-icon btn-icon-mini btn-danger float-center"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                              </form>
                                <br>
                            @endif
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                </tr>
            @endforeach
          </tbody>
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
