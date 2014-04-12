@extends('layouts.admin.index')

@section('menu')
    <li class="new_item"><a href="{{ url('admin') }}"> + New page</a></li>

    @foreach ($pages as $page)
        <li><a href="{{ url('admin').'/edit/'.$page->id }}">{{ $page->title }}</a></li>
    @endforeach
@stop


@section('content')
    <form action="{{ url('admin').'/createPage' }}" method="post">
        <p>
            <label for="editor">
                <input type="text" name="pageTitle" placeholder="titlu" />
            </label>
            <textarea class="ckeditor" cols="80" id="editor" name="pageText" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" value="Adauga">
        </p>
    </form>
@stop