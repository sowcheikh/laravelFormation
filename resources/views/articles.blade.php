<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <h1>la liste des articles</h1>
    <h2>
        @foreach ($posts as $post)
            <h2> {{$post}} </h2>
        @endforeach
    </h2>
</body>

</html>