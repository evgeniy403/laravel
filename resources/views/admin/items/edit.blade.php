@extends('admin.main')
@section('content')
<form method="POST" action="{{action('ItemsController@update', ['items' => $items->id])}}"/>
    <input type="hidden" name="_method" value="put">

    <div class="a_blk">
        <span>Наименование запчасти</span>
        <br>
        <input type="text" name="title" value="{{$items->title}}"/>
    </div>
    
    <div class="a_blk">
        <span>Группа</span>
        <br>
        <select name="group_id">
            <option value="0">Выбрать</option>
            @foreach($groups as $group)
                @if ($group->id == $items->group_id)
                    <option value="{{$group->id}}" selected>{{$group->title}}</option>
                @else
                    <option value="{{$group->id}}">{{$group->title}}</option>
                @endif
            @endforeach
        </select>
    </div>
    
    <div class="a_blk">
        <span>Производитель</span>
        <br>
        <select name="manufacturer_id">
            <option value="0">Выбрать</option>
            @foreach($manufacturers as $manufacturer)
                @if ($manufacturer->id == $items->manufacturer_id)
                    <option value="{{$manufacturer->id}}" selected>{{$manufacturer->title}}</option>
                @else
                    <option value="{{$manufacturer->id}}">{{$manufacturer->title}} </option>
                @endif

            @endforeach
        </select>
    </div>
    
    <div class="a_blk">
        <span>Вес</span>
        <br>
        <input type="text" name="weight" value="{{$items->weight}}" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8)"/><br>
    </div>
    
    <div class="a_blk">
        <span>Стоимость</span>
        <br>
        <input type="text" name="cost" value="{{$items->cost}}" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8)"/><br>
    </div>
    
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    
    <div class="a_blk">
        <input type="submit" value="Сохранить">
    </div>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
</form>
<div>
    <a href="/adminzone/items">Все запчасти</a>
</div>
@include('common.errors')
@endsection