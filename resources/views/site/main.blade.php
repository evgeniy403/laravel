<!DOCTYPE html>
<html>
<head>
<meta charaset="utf-8"/>
<title>Сайт</title>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
</head> 
<body> 
    <div id="wrraper">
<header>
    <div><a href="/adminzone/">Перейте к админке</a></div>
</header>
    <div id="container">
        <div class="left_sidebar">
            <div class="side">
                <div class="ubm">Поиск</div>
                <form method="GET" action="{{action('FrontController@index')}}">
                
                    <div class="blk">
                        <div class="lab">Группа</div>
                        <select name="group_id">
                            <option value="">Выбрать</option>
                            @foreach ($groups as $group)
                                @if (isset($_GET['group_id']) && $_GET['group_id'] == $group->id)
                                    <option value="{{$group->id}}" selected>{{$group->title}}</option>
                                @else
                                    <option value="{{$group->id}}">{{$group->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="blk">
                        <div class="lab">Стоимость</div>
                        <input type="text" name="price_min" value="<?php if (isset($_GET['price_min'])) echo $_GET['price_min']; ?>" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/> 
                        до 
                        <input type="text" name="price_max" value="<?php if (isset($_GET['price_max'])) echo $_GET['price_max']; ?>" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/> <br>
                    </div>
                    
                    <div class="blk">
                        <div class="lab">Вес</div>
                        <input type="text" name="weight_min" value="<?php if (isset($_GET['weight_min'])) echo $_GET['weight_min']; ?>" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/> 
                        до 
                        <input type="text" name="weight_max" value="<?php if (isset($_GET['weight_max'])) echo $_GET['weight_max']; ?>" onkeydown="javascript: return ((event.keyCode>47)&&(event.keyCode<58)) || (event.keyCode == 8) || (event.keyCode == 9)"/> <br>
                    </div>
                    
                    <div class="blk">
                        <div class="lab">Производитель</div>
                        <select name="manufacturer_id">
                            <option value="">Выбрать</option>
                            @foreach ($manufacturers as $manufacturer) 
                                @if (isset($_GET['manufacturer_id']) && $_GET['manufacturer_id'] == $manufacturer->id)
                                    <option value="{{$manufacturer->id}}" selected>{{$manufacturer->title}}</option>
                                @else
                                    <option value="{{$manufacturer->id}}">{{$manufacturer->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <input type="hidden" name="count_page" value="<?php if (isset($_GET['count_page'])) echo $_GET['count_page'];?>" />
                    <input type="submit" value="Найти" name="btn"/>
                </form>
                
            <div>
                Показывать по:
                <a href="/?count_page=2" class="<?php if (!isset($_GET['count_page']) || $_GET['count_page'] == 2) echo 'active';?>">2</a>
                <a href="/?count_page=5" class="<?php if (isset($_GET['count_page']) && $_GET['count_page'] == 5) echo 'active';?>">5</a>
                <a href="/?count_page=10" class="<?php if (isset($_GET['count_page']) && $_GET['count_page'] == 10) echo 'active';?>">10</a>
            </div>
         </div>
        </div>    
        <div id="content">
             @yield('content')
        </div>
    </div>
    </div>
    <footer>
    </footer>
 </body>
</html>