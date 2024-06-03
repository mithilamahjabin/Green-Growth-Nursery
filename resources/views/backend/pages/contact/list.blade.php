@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-4"> Contact Info Details </h1>
<ol class="breadcrumb mb-4">
</ol>

<ol class="breadcrumb mb-2">
</ol>

<table class="table">
  <thead>
    <tr>

    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>

    </tr>
  </thead>
  <tbody>
  @foreach($contact as $key=>$contact)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td> {{$contact->name}}</td>
      <td> {{$contact->email}}</td>
      <td>{{$contact->message}} </td>
    </tr>
  @endforeach

  </tbody>
</table>




</div>
@endsection
