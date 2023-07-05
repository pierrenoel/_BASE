<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new post</title>
</head>
<body>
    <main>
        <form action="/post/store" method="POST">
            <input type="text" name="title" placeholder="The title">
            <input type="submit">
        </form>
    </main>
</body>
</html>