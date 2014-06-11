@extends('layouts.index')


<a href="#article{{ $articleId }}" rel="" id="anchor"></a>

@section('content')
<div class="row">
    <div class="col-md-9">
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
    </div>
    <div class="col-md-3">
        <h4>Ultimile Avize</h4>
        <div class="news">
            @foreach($allEvents as $event)
            <div class="grey-line">
                <h5>
                    <a href="{{ url('events/' . $event->id ) }}">
                        @if (Session::get('lang') == 'en')
                        {{ $event->title_en }}
                        @else
                        {{ $event->title }}
                        @endif
                    </a>
                </h5>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop



