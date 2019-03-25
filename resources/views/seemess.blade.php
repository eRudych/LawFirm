@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($message as $message)
  <div class="alert alert-secondary" role="alert" id="{{$message->id}}">
   <a href="/MFLQv3ZT/{{$message->id}}">
        <button type="button" name="button" class="btn btn-danger">Delete</button>
    </a>   
   <h2 class="text-muted">{{$message->name}}</h2>
    <p class="lead">{{$message->phone}}</p>
    <p class="lead">{{$message->message}}</p>
    <p class="lead">{{$message->created_at}}</p>
  </div>
  
  @endforeach
</div>
@endsection