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
 dev_basis06
            [<a href='/posts/create'>create</a>]

=======
 dev_basis05
=======
 dev_basis04
 master
            [<a href='/posts/create'>create</a>]
 master
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
 dev_basis06
=======
 dev_basis05
=======
=======
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
 dev_basis03
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
<<<<<<< HEAD
                    <a href="">{{ $post->category->name }}</a>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
=======
=======
                    <h2 class='title'>{{ $post->title }}</h2>
 master
 master
 master
 master
>>>>>>> af3352e6b10bf5697dfdc9d7af5b0a1e818f54a1
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
             <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>