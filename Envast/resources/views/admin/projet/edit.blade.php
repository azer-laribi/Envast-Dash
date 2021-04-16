@extends('layouts.master')

@section('title')
  Envast Dashboard | Edit Projets
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Edit Projet </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form class="" action="/Projet-update/{{$projet->id}}" method="POST">
            {{ csrf_field()}}
            {{method_field('PUT')}}<div class="form-group">
              <label for="recipient-name" class="col-form-label">Projet:</label>
              <input type="text" name="project_name"  class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label col-form-label-scrollable">Description:</label>
              <textarea type="text"   name="project_description" class="form-control" id="recipient-name"></textarea>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Deadline:</label>
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
            <button type="submit" class="btn btn-info">Update</button>
            <a href="/Projet" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
