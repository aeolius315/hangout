@extends('layouts.app')

@section('content')
    <a href="/events" class="btn btn-dark mt-2 mb-3">Go Back</a>
    <h1>{{$event->title}}</h1>
    <div>
        <p>{{$event->body}}</p>
    </div>
    <hr>
    <small> Created on {{$event->created_at}} by {{$event->user->name}}</small>
    <small class="float-right"> Updated on {{$event->updated_at}}</small>
    
    <hr>
    @if(Auth::user() == $event->user)
        <a href="/events/{{$event->id}}/edit" class="btn btn-secondary">Edit</a>

        {{ Form::open(array('url' => ['/events', $event->id], 'method' => 'DELETE', 'class' => 'float-right')) }}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{ Form::close() }}
    @endif
    
@endsection