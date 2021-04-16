@extends('layouts.master')

@section('title')
  Envast Dashboard | Edit Taches
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Modifer la Tache</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form class="" action="/Tache-update/{{$tache->id}}" method="POST">
            {{ csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nom de Projet:</label>
              <select name="projet_id" id="inputState" class="form-control">
                <option value="0">choose Project</option>
                @foreach($Projet as $projet)
                    <option value="{{$projet->id}}">{{$projet->project_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tache</label>
              <input type="input" class="form-control" name="tache_name" value="{{$tache->tache_name}}" required>
            </div>
            <div class="mb-3">
              <label for="Textarea">Description</label>
              <textarea type="input" class="form-control" name="tache_description" value="{{$tache->tache_description}}"  required></textarea>
              <div class="form-group">
                <label for="input">Date de Début</label>
                <input type="date" class="form-control" name="start_date"  value="{{$tache->start_date}}" required>
              </div>
              <div class="form-group">
                <label for="input">Date de Fin</label>
                <input type="date" class="form-control" name="end_date"  value="{{$tache->end_date}}" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Membre:</label>
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
            <button type="submit" class="btn btn-info">Mettre à jour</button>
            <a href="/Tache" class="btn btn-secondary">Annuler</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
