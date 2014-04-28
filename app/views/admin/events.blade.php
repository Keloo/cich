@extends('layouts.admin.index')

@section('menu')
<li class="new_item"><a href="{{ url('admin') }}/events"> + New event</a></li>

@foreach ($events as $event)
<li><a href="{{ url('admin').'/editEvent/'.$event->id }}">{{ $event->title }}</a></li>
@endforeach
@stop


@section('content')
<form action="{{ url('admin').'/addEvent' }}" method="post">
    <p>
        <label><strong>RO:</strong></label>
        <input type="text" name="eventTitle" placeholder="titlu" />
    </p>
    <p>
        <textarea class="ckeditor" cols="80" id="editor" name="eventText" rows="10"></textarea>
    </p>

    <br/><br/>

    <p>
        <label><strong>EN:</strong></label>
        <input type="text" name="eventTitleEn" placeholder="titlu (en)" />
    </p>
    <p>
        <textarea class="ckeditor" cols="80" id="editor" name="eventTextEn" rows="10"></textarea>
    </p>

    <p>
        <input type="submit" value="Adauga">
    </p>
</form>
@stop