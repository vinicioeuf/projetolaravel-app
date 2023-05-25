@extends('layouts.app')

@section('content')

<h4>Olá mundo!</h4>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sistem as $projlaravel)
            
        @endforeach
      <tr>
        <th scope="row">{{$projlaravel->id}}</th>
        <td>{{$projlaravel->nome}}</td>
        <td>{{$projlaravel->email}}</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
@endsection