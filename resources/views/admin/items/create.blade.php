@extends('admin.main')
@section('content')
<form method="POST" action="{{action('ItemsController@store')}}"/>
    <div class="a_blk">
        <span>Наименование запчасти</span>
        <br>
        <input type="text" name="title"/>
    </div>
    
    <div class="a_blk">
        <span>Группа</span>
        <br>
        <select name="group_id">
            <option value="">Выбрать</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="a_blk">
        <span>Производитель</span>
        <br>
        <select name="manufacturer_id">
            <option value="">Выбрать</option>
            @foreach($manufacturers as $manufacturer)
                <option value="{{$manufacturer->id}}">{{$manufacturer->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="a_blk">
        <span>Вес</span>
        <br>
        <input type="text" name="weight" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/>
    </div>

    <div class="a_blk">
        <span>Стоимость</span>
        <br>
        <input type="text" name="cost" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/><br>
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