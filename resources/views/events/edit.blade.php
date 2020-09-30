@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    {{ Form::open(array('url' => ['/events', $event->id], 'method' => 'PUT')) }}
        
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Title' ])}}
        </div>
<<<<<<< HEAD
=======
        <div class="row">
            <div class="form-group col">
                {{Form::label('event_date', 'Date of Event')}}
                {{Form::date('event_date',  $event->event_date, ['class' => 'form-control', 'placeholder' => 'Date of Event' ])}}
            </div>
            <div class="form-group col">
                {{Form::label('event_time', 'Time of Event')}}
                {{Form::time('event_time',  $event->event_time, ['class' => 'form-control', 'placeholder' => 'Date of Event' ])}}
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                {{Form::label('event_address', 'Location')}}
                {{Form::text('event_address', $event->event_address, ['class' => 'form-control', 'placeholder' => 'Location' ])}}
            </div>
            <div class="form-group col">
                {{Form::label('event_city', 'City')}}
                {{Form::text('event_city', $event->event_city, ['class' => 'form-control', 'placeholder' => 'City' ])}}
            </div>
        </div>
>>>>>>> a423e430... To Do:
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $event->body, ['class' => 'form-control', 'placeholder' => 'Body' ])}}
        </div>
<<<<<<< HEAD
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
=======
        <div class="form-group">
            {{Form::label('event_image', 'Select the file to upload. ')}}
            {{Form::open(array('url' => '/uploadfile','files'=>'true'))}}
            {{Form::file('event_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'mb-2 mt-2 btn btn-primary'])}}
>>>>>>> a423e430... To Do:
    {{ Form::close() }}
@endsection