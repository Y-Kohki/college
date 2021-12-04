<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
 dev_basis06
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <input type='submit' style='display:none'>
            <p>[<span onclick='return deletePost(this);'>delete</span>]</p> 

        </form>
=======
 dev_basis05
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
=======
 master
 master
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
 dev_basis06
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('削除すると復元できません。本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
=======
 master
    </body>
</html>