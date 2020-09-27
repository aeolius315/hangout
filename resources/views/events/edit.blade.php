@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    {{ Form::open(array('url' => ['/events', $event->id], 'method' => 'PUT')) }}
        
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Title' ])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $event->body, ['class' => 'form-control', 'placeholder' => 'Body' ])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection