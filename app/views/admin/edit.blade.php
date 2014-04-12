@extends('layouts.admin.index')

@section('menu')
    <li class="nav-header">Navigation</li>
    <li><a href="admin">Create new Page</a></li>
    <li><a href="admin/menu">Create new Menu</a></li>
    @foreach ($pages as $page)
        <li><a
        @if ($currentPage->id == $page->id)
            {{ "class='active'" }}
        @endif

        href="admin/edit/{{ $page->id }}">{{ $page->text }}</a></li>
    @endforeach
@stop

@section('content')
    <form action="admin/createPage" method="post">
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