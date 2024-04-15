<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container top-right links d-flex justify-content-between">
    <a href="/addNew" class="btn btn-primary">Add News</a>
    <p>Hello <span class="text-primary">{{ $email }}</span></p> <!-- Виводимо електронну адресу користувача -->
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</div>

<div class="container">
    <h2 class="text-center">News List</h2>
    <div>
        @foreach($news as $item)
            <h3 class="pt-3" style="color: blue; border-top: solid 1px black;">{{ $item->summary }}</h3>
            <p style="color: #86acba;">{{ $item->short_description }}</p>
        @endforeach
    </div>
</div>
</body>
</html>
