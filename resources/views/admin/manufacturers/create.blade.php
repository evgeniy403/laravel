@extends('admin.main')
@section('content')
<form method="POST" action="{{action('ManufacturersController@store')}}" onsubmit="return valid(this);"/>

    <div class="a_blk">
        <span>Производитель</span>
        <br>
        <input type="text" name="title" data-not-empty/>
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
@include('common.errors')
@endsection