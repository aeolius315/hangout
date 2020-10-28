@extends('layouts.app')

@section('content')
    <a href="/events" class="btn btn-dark mt-2 mb-3">Go Back</a>
    
<div class="container mb-3 p-3">
    <h1>{{$event->title}}</h1><hr>
    <div class="row">
        <p class="col">Location : {{$event->event_address}}, {{$event->event_city}}</p>
        <span class="col"><p class="float-right"> Date of Event : {{$event->event_date}} {{$event->event_time}}</p></span>
    </div>
    <div class="row">
        <h5 class="m-2" style="text-indent:50px;text-align: justify;">{{$event->body}} </h5>
        {{-- <div class="col-4 container border">
            <img src="{{URL::asset('storage/images/{{{$event->event_image}}}')}}" height="100%" width="100%">
        </div> --}}
    </div>
    <hr>
    <small> Created on {{$event->created_at}} by {{$event->user->name}}</small>
    <small class="float-right"> Updated on {{$event->updated_at}}</small>
    
    <hr>
    @if(Auth::user() == $event->user)
        <a href="/events/{{$event->id}}/edit" class="btn btn-secondary mb-3">Edit</a>

        {{Form::open(array('url' => ['/events', $event->id], 'method' => 'DELETE', 'class' => 'float-right')) }}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close() }}
    @endif
</div>
    
@endsection