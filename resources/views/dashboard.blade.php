@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<<<<<<< HEAD
            <div class="card">
=======
            <div class="card mt-3">
>>>>>>> a423e430... To Do:
                <div class="card-header"><h3 class="float-left pt-1">Your Events</h3><a href="/events/create" class="btn btn-primary float-right">Create Event</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($events) > 0)
                        <table class="table table-striped">
<<<<<<< HEAD
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td></td>
=======
                            <thead class="thead">
                            <tr>
                                <th>Title</th>
                                <th>Date & Time</th>
                                <th>City</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->event_date}} {{$event->event_time}}</td>
                                    <td>{{$event->event_city}}</td>
>>>>>>> a423e430... To Do:
                                    <td><a href="/events/{{$event->id}}/edit" class="btn btn-secondary float-right">Edit</a></td>
                                    {{-- <th><a href="/events/{{$event->id}}" class="btn btn-danger float-right">Delete</a></th> --}}  
                                </tr>     
                            @endforeach
                        </table>
                    @else
                        <p>You have No Events</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
