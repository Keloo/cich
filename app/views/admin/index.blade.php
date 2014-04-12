@extends('layouts.admin.index')

@section('menu')
    <li class="nav-header">Navigation</li>
    <li class="active"><a href="{{ url('admin') }}">Create new Page</a></li>
    <li><a href="{{ url('admin').'/menu' }}">Create new Menu</a></li>
    @foreach ($pages as $page)
        <li><a href="{{ url('admin').'/edit/'.$page->id }}">{{ $page->text }}</a></li>
    @endforeach
@stop


@section('content')
    <form action="{{ url('admin').'/createPage' }}" method="post">
        <p>
            <label for="editor">
                Editor:
            </label>
            <textarea class="ckeditor" cols="80" id="editor" name="pageText" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
@stop