@extends('layouts.app')

@section('content')
    <hr>
    {{ Form::open(array('url' => '/events', 'method' => 'GET')) }}
        <div class="row">
            <div class="col">
                <h1>Events</h1>
            </div>
            {{-- <div class="form-group col pt-2">
                {{Form::date('date', '', ['class' => 'form-control', 'placeholder' => 'Date of Event' ])}}
            </div>  --}}
            {{-- <p class="pt-3">or</p> --}}
            <div class="form-group col-4 pt-2">
                {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City' ])}}
            </div>
            <div class="col-1 pt-2">
                {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
            </div>
        </div class="row">
    {{ Form::close() }}
    <hr>
    @if (count($events) > 0)
        @foreach ($events as $event)
            <div class="list-group-item mb-1">
                <div class="row">
                <h3 class="col-4"><a class="text-dark" href="/events/{{$event->id}}">{{$event->title}}</a></h3>
                <h6 class="col pt-2"> {{$event->event_address}}, {{$event->event_city}} City</h6>
                <h6 class="col pt-2"> {{$event->event_date}} {{$event->event_time}}</h6>
                </div>
                <small> Created on {{$event->created_at}} by {{$event->user->name}}</small>
            </div>
        @endforeach
    @else
        <p>No Events</p>
    @endif
@endsection