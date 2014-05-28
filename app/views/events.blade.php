@extends('layouts.index')


<a href="#article{{ $articleId }}" rel="" id="anchor"></a>

@section('content')
    <br/>
    @foreach($events as $event)
        <div class="event" id="article{{ $event->id }}">
            <div class="event_title">
                {{ $event->title }}
            </div>
            <div class="event_date">
                {{ date("d/m/Y", strtotime($event->date)) }}
            </div>
            <div class="event_content">
                {{ $event->content }}
            </div>
        </div>
    @endforeach
@stop