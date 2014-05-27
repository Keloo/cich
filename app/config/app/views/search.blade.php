@extends('layouts.index')

@section('content')
    @foreach($pages as $page)
        <a href="{{ url('/page/'.$page->id) }}">{{ $page->title }}</a><br>
    @endforeach
@stop