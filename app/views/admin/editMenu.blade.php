@extends('layouts.admin.index')

@section('menu')
    <li class="new_item"><a href="{{ url('admin/menu') }}"> + New menu item</a></li>
@foreach ($menu as $item)
    <li><a href="{{ url('admin').'/editMenu/'.$item->id }}">{{ $item->name }}</a></li>
@endforeach
@stop

@section('content')
<form action="{{ url('admin').'/updateMenu' }}" method="post">
    <input type="hidden" name="menuId" value="{{ $currentItem->id }}" />
    <p>
        <label class="lab">
            Denumire:
        </label>
        <input type="text" name="menuName" placeholder="denumire" value="{{ $currentItem->name }}" />
    </p>
    <p>
        <label class="lab">
            Denumire (EN):
        </label>
        <input type="text" name="menuNameEn" placeholder="denumire" value="{{ $currentItem->name_en }}" />
    </p>
    <p>
        <label class="lab">
            URL:
        </label>
        <input type="text" name="menuUrl" placeholder="url" value="{{ $currentItem->url }}" />
    </p>
    <p>
        <label class="lab">
            Parinte:
        </label>
        <select name="parentId" id="parentId">
            <option value="0">/</option>
            @foreach ($menu as $item)
                @if ($currentItem->id != $item->id)
                    <option value="{{ $item->id }}"
                    @if ($currentItem->parent_id == $item->id)
                        selected
                    @endif
                    >{{ $item->name }}</option>
                @endif
            @endforeach
        </select>
    </p>

    <p>
        <label class="lab">Sterge</label>
        <input class="checkbox" type="checkbox" name="deleteMenu" />
    </p>
    <br/>
    <p>
        <input type="submit" value="Modifica">
    </p>
</form>
@stop
