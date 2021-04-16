@extends('layouts.master')

@section('title')
  Envast Dashboard |Member
@endsection


@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="now-ui-icons business_badge"></i>  Member</h4>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th style='text-align:center'>Nom</th>
              <th style='text-align:center'>Num de Tel</th>
              <th style='text-align:center'>Type d'Utilisateur</th>
              <th style='text-align:center'>post</th>
              <th style='text-align:center'>Email</th>
              <th style='text-align:center'>Modifier</th>
              <th style='text-align:center'>Effacer</th>
            </thead>
            <tbody>
              @foreach($users as $row)
              @if($row->usertype == 'membre')
                <tr>
                  <td style='text-align:center'>{{$row->name}}</td>
                  <td style='text-align:center'>{{$row->phone}}</td>
                  <td style='text-align:center'>{{$row->usertype}}</td>
                  <td style='text-align:center'>{{$row->post}}</td>
                  <td style='text-align:center'>{{$row->email}}</td>
                  <td style='text-align:center'><a href="/role-edit/{{$row->id}}" class="btn btn-success" href="#">Modifier</a></td>
                  <td style='text-align:center'>
                    <form  action="/role-delete/{{$row->id}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger">Effacer</button>
                    </form>
                  </td>
                </tr>
              @endif
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
