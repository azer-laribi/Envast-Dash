@extends('layouts.master')

@section('title')
  Envast Dashboard | Tache member
@endsection


@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"><i class="now-ui-icons users_circle-08"></i> {{Auth::user()->name}} </h5>
              </div>
              <div class="card-body" id="example">
                <form class="" action="/updateProfile" method="POST">
                  {{ csrf_field()}}
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Compagnie </label>
                        <input type="text" class="form-control" disabled="" placeholder="ENVAST" value="ENVAST">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" disabled="" value="{{ Auth::user()->name }}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Post</label>
                        <input type="email" class="form-control" disabled="" value="{{ Auth::user()->post }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Numéro Téléphone</label>
                        <input type="text" class="form-control" disabled="" placeholder="Last Name" value="{{ Auth::user()->phone }}">
                      </div>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

@endsection


@section('scripts')

@endsection
