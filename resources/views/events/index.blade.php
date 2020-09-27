@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    @if (count($events) > 0)
        @foreach ($events as $event)
            <div class="list-group-item mb-1">
                <h3><a href="/events/{{$event->id}}">{{$event->title}}</a></h3>
                <small> Created on {{$event->created_at}} by {{$event->user->name}}</small>
            </div>
        @endforeach
        {{-- Visual Error in Using Paginate --}}
        {{-- {{$events->links()}} --}}
    @else
        <p>No Events</p>
    @endif
@endsection