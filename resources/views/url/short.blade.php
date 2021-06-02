<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>
    <h3>Shorten your Url using Laravel:</h3>

    <form action="/short" method="POST">
        @csrf 
        <input type="text" name="url" id="">   <br />
        <button type="submit">Short url</button>
    </form>
</body>
</html>

