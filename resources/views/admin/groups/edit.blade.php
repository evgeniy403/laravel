@extends('admin.main')
@section('content')
<form method="POST" action="{{action('GroupsController@update',['groups'=>$group->id])}}">
    <input type="hidden" name="_method" value="put">

    <div class="a_blk">
        <span>Группа:</span>
        <br>
        <input type="text" name="title" value="{{$group->title}}"><br>
    </div>    

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    <div class="a_blk">
        <input type="submit" value="Сохранить">
    </div>
</form>

@if(Session::has('message'))
{{Session::get('message')}}
@endif
<div>
    <a href="/adminzone/groups/">Все группы</a>
</div>
@endsection