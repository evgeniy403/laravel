@extends('admin.main')

@section('content')

<form method="POST" action="{{action('GroupsController@store')}}">

    <div class="a_blk">
        <span>Наименование группы:</span>
        <br>    
        <input type="text" name="title">
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