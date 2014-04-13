@extends('layouts.admin.index')

@section('menu')
    <li class="new_item"><a href="{{ url('admin') }}"> + New page</a></li>
    @foreach ($pages as $page)
        <li
            @if ($currentPage->id == $page->id)
                {{ "class='active'" }}
            @endif

         ><a href="{{ url('admin').'/edit/'.$page->id }}">{{ $page->title }}</a></li>
    @endforeach
@stop

@section('content')
    <form action="{{ url('admin').'/updatePage' }}" method="post">
        <p>
            <input type="hidden" name="pageId" value="{{ $currentPage->id }} " />
            <input type="text" name="pageTitle" value="{{ $currentPage->title }}" placeholder="titlu" /><br/>
        </p>
        <p>
            <textarea class="ckeditor" cols="80" id="editor" name="pageText" rows="10">{{ $currentPage->text }}</textarea>
        </p>
        <p>
            <label class="inline hint">Menu*:</label>
            <select name="menuId">
                <option value="0"></option>

                @foreach ($menu as $item)
                    <option value="{{ $item->id }}"
                        @if ($currentPage->menu_id == $item->id) {
                            selected
                        @endif
                    >{{ $item->name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <input type="submit" value="Modifica" name="update">
        </p>
    </form>
@stop