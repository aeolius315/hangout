@extends('layouts.app')

@section('content')
    {{ Form::open(array('url' => '/events', 'method' => 'GET')) }}
        <div class="row m-3">
            <div class="col">
                <h1>Events</h1>
            </div>
            {{-- <div class="form-group col pt-2">
                {{Form::date('date', '', ['class' => 'form-control', 'placeholder' => 'Date of Event' ])}}
            </div>  --}}
            {{-- <p class="pt-3">or</p> --}}
            <div class="col form-group col-4 pt-2">
                {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City' ])}}
            </div>
            <div class="col-1 pt-2">
                {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
    {{ Form::close() }}
    @if (count($events) > 0)
        @foreach ($events as $event)
            <div class="row m-2">
                <a class="text-dark list-group-item list-group-item-action" href="/events/{{$event->id}}">
                    <h3>{{$event->title}}</h3>
                    <h6> {{$event->event_address}}, {{$event->event_city}} City</h6>
                    <h6> {{$event->event_date}} {{$event->event_time}}</h6>
                    <small> Created on {{$event->created_at}} by {{$event->user->name}}</small>
                </a>
            </div>
        @endforeach
    @else
        <p>No Events</p>
    @endif
@endsection