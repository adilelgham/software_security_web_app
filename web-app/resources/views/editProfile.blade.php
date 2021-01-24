@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <form action="{{route('postEditProfile')}}" method="post">
            @csrf
            <div class="form-group">

                <div class="form-group">
                    <label for="firstname">Name: </label>
                    <input type="text" name="name" class="form-control" id="name"
                           value="{{$profile->name}}">

                </div>




            </div>


            <input type="hidden" name="id" value="{{$profile->id}}">
            <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>
@endsection