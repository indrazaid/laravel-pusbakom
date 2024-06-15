<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
      <h3>{{auth()->user()->name }}</h3>
    @endauth
   <form action="/logout" method="POST">
    @csrf
    <button type="submit">logout</button>
   </form>
    <h1>Halaman dashoard</h1>
</body>
</html>