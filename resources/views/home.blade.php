<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon mini blog</title>
</head>
<body>

<h1>Nos articles</h1>

<ul>
    @foreach($articles as $articles)
        <li>{{$articles['title']}}</li>
    @endforeach
</ul>

</body>
</html>
