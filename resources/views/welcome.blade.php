@extends('layouts.app')

@section('content')
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
@endsection
