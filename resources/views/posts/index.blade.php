<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
 dev_basis04
            [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
=======
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
 dev_basis03
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
=======
                    <h2 class='title'>{{ $post->title }}</h2>
 master
 master
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
             <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>