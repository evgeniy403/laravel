@extends('site.main')
@section('content')

<div class="section">
    @if (count($items) > 0) 
        @foreach ($items as $item)
            <div class="item">
                <div>Title item: {{$item->title}}</div>
                <div>Group: {{$item->group_title}}</div>
                @if (!empty($item->manufacturer_title))
                    <div>Manufacturer: {{$item->manufacturer_title}}</div>
                @endif
                @if (!empty($item->cost))
                    <div>Cost: {{$item->cost}}</div>
                @endif
                @if (!empty($item->weight))
                    <div>Weigth: {{$item->weight}}</div>
                @endif
            </div>
        @endforeach
        <div>
            {{$items->render()}}
        </div>
    @else 
        <div>Ничего не найдено попробуйте изменить параметры поиска</div>
    @endif
        
</div>
@endsection