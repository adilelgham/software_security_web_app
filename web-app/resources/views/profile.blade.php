@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <ul class="list-group mb-4 ">
            <li class="list-group-item active">Naam: {{$profile->name}} </li>
            <li class="list-group-item">Emailaddres: {{$profile->email}}</li>
        </ul>
        <a href="{{route('editProfile')}}" class="btn btn-success btn-lg " role="button"
           aria-pressed="true">Wijzig</a>
<br>
           <a href="{{route('exportProfile')}}" class="btn btn-success btn-lg " role="button"
           aria-pressed="true">Download in een file</a>
<br>
           <form action="{{route('deleteProfile')}}" method="post">
           @csrf
        <button type="submit" class="btn btn-danger mb-5">Verwijder account</button>
           </form>
    </div>
@endsection