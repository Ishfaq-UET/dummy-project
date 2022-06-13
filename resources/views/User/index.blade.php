@extends('layout')

@section('content')
  <style>
      .uper {
          margin-top: 40px;
      }
  </style>

<div class="container">
  <table class="table table-striped">
  <thead>
  <tr>
    <td>{{'id'}}</td>
    <td>{{'name'}}</td>
    <td>{{'username'}}</td>
    <td>{{'topic'}}</td>
    <td>{{'auther'}}</td>
    <td>{{'email'}}</td>
    <td>{{'address'}}</td>
    <td>{{'ip_address'}}</td>
    <td>{{'street_adress'}}</td>
    <td>{{'country'}}</td>
  </tr>
  </thead>
  <tablebody>
  @foreach ($users as $user)
    <tr>
      <td>{{$user->id }}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->username}}</td>
      <td>{{$user->topic}}</td>
      <td>{{$user->auther}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->ip_address}}</td>
      <td>{{$user->street_address}}</td>
      <td>{{$user->country}}</td>
    </tr>
  @endforeach
  </tablebody>
  </table>
</div>