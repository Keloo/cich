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
            <label><strong>RO:</strong></label>
            <input type="text" name="pageTitle" placeholder="titlu" />
        </p>
        <p>
            <textarea class="ckeditor" cols="80" id="editor" name="pageText" rows="10"></textarea>
        </p>

        <br/><br/>

        <p>
            <label><strong>EN:</strong></label>
            <input type="text" name="pageTitleEn" placeholder="titlu (en)" />
        </p>
        <p>
            <textarea class="ckeditor" cols="80" id="editor" name="pageTextEn" rows="10"></textarea>
        </p>


        <br/>
        <p>
            <label class="inline hint">Menu*:</label>
            <select name="menuId">
                <option value="0"></option>
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