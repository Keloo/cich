@extends('layouts.admin.index')

@section('menu')
    <li class="nav-header">Navigation</li>
    <li><a href="{{ url('admin') }}">Create new Page</a></li>
    <li><a href="{{ url('admin').'/menu' }}">Create new Menu</a></li>
    @foreach ($pages as $page)
        <li><a href="{{ url('admin').'/edit/'.$page->id }}">{{ $page->text }}</a></li>
    @endforeach
@stop

@section('content')
    <form action="admin/createMenu" method="post">
        <p>
            <input name="menuName" type="text"/>
        </p>

        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
@stop