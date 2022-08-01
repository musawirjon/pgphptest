<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>User Card - <?=$user->name ?? ''?></title>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
        @if(@$user)
        <header>
            <span class="avatar"><img src="images/users/<?=$user->id?>.jpg" alt="" /></span>
            <h1><?=$user->name?></h1>
            @foreach($user->comments as $comment)
            <p>
                <?=nl2br($comment['comment'])?>
            </p>
            @endforeach
        </header>
        @else
        <header>
            Add id to url, to view users and comments data!
        </header>
        @endif
    </section>
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Pictureworks</li>
        </ul>
    </footer>

</div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>