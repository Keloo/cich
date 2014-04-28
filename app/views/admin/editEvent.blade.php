@extends('layouts.admin.index')

@section('menu')
        <li class="new_item"><a href="{{ url('admin') }}/events"> + New event</a></li>
    @foreach ($events as $event)
        <li
        @if ($currentEvent->id == $event->id)
            {{ "class='active'" }}
        @endif

        ><a href="{{ url('admin').'/editEvent/'.$event->id }}">{{ $event->title }}</a></li>
    @endforeach
@stop

@section('content')
<form action="{{ url('admin').'/updateEvent' }}" method="post">
    <p>
        <label><strong>RO:</strong></label>
        <input type="hidden" name="eventID" value="{{ $currentEvent->id }} " />
        <input type="text" name="eventTitle" value="{{ $currentEvent->title }}" placeholder="titlu" /><br/>
    </p>
    <p>
        <textarea class="ckeditor" cols="80" id="editor" name="eventText" rows="10">{{ $currentEvent->content }}</textarea>
    </p>

    <br/><br/>

    <p>
        <label><strong>EN:</strong></label>
        <input type="text" name="eventTitleEn" placeholder="titlu (en)" value="{{ $currentEvent->title_en }}" />
    </p>
    <p>
        <textarea class="ckeditor" cols="80" id="editor" name="eventTextEn" rows="10">{{ $currentEvent->content_en }}</textarea>
    </p>

    <p>
        <input type="submit" value="Modifica" name="update">
    </p>
</form>
@stop