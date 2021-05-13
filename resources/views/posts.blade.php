<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
    </head>

    <body>
       <h1>Hello from Laravel</h1> 
       @foreach ($posts as $post)
           <p>{{ $post->editor }}</p>
           <p>{{ $post->body }}</p>
       @endforeach
    </body>
</html>