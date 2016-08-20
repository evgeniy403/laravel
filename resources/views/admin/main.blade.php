<!DOCTYPE html>
<html>
<head>
    <meta charaset="utf-8"/>
    <title>Админка</title>
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    <script src="{{asset('js/valid.js')}}"></script>
</head> 
<body>    
    <div id="wraper">
        <header>
            <div><a href="/adminzone">Главная</a></div>
        </header>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>