@extends('admin.main')
@section('content')
<form method="POST" action="{{action('ManufacturersController@update',['manufacturers'=>$manufacturer->id])}}"/>
    <input type="hidden" name="_method" value="put"/>

    <div class="a_blk">
        <span>Название категории</span>
        <br>
        <input type="text" name="title" value="{{$manufacturer->title}}"/>
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
    <a href="/adminzone/manufacturers">Все производители</a>
</div>
@endsection