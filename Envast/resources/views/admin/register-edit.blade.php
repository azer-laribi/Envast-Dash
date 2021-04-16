@extends('layouts.master')

@section('title')
  Envast Dashboard | Edit member
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Edit Member : {{ Auth::user()->name }}</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form class="" action="/role-register-update/{{$users->id}}" method="POST">
            {{ csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group col-md-4">
              <label for="inputState">Statut</label>
              <select name="usertype" id="inputState" class="form-control">
                <option value="{{$users->usertype}}" >chef</option>
                <option value="{{$users->usertype}}">member</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" value="{{$users->email}}" required>
            </div>
            <div class="form-group">
              <label for="input">Phone</label>
              <input type="input" class="form-control" name="phone" value="{{$users->phone}}" required>
            </div>
            <div class="mb-3">
              <label for="input">Post</label>
              <input class="form-control" name="post" value="{{$users->post}}"  placeholder="Required example textarea" required></textarea>

            <button type="submit" class="btn btn-info">Update</button>
            <a href="/registremember" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection
