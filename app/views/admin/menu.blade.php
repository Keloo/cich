@extends('layouts.admin.index')

@section('menu')
    <li class="new_item"><a href="{{ url('admin/menu') }}"> + New menu item</a></li>
    @foreach ($menu as $item)
        <li><a href="{{ url('admin').'/editMenu/'.$item->id }}">{{ $item->name }}</a></li>
    @endforeach
@stop

@section('content')
    <form action="{{ url('admin').'/createMenu' }}" method="post">
        <p>
            <label class="lab">
                Denumire:
            </label>
            <input type="text" name="menuName" placeholder="denumire" />
        </p>
        <p>
            <label class="lab">
                Parinte:
            </label>
            <select name="parentId">
                <option value="0">/</option>
            @foreach ($menu as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            </select>
        </p>

        <p>
            <input type="submit" value="Adauga">
        </p>
    </form>
@stop