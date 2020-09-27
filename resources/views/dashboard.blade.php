@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="float-left pt-1">Your Events</h3><a href="/events/create" class="btn btn-primary float-right">Create Event</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($events) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td></td>
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
