@extends('layouts.index')


@section('content')
    @if (Session::get('lang') == 'en')
        {{ $currentPage->text_en }}
    @else
        {{ $currentPage->text }}
    @endif
@stop