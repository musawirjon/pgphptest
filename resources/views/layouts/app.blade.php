<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>User Card - <?=$user->name ?? ''?></title>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('comment', ['id' => "$user->id"])}}">
                    Comments
                </a> 
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>
