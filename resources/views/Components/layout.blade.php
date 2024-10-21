<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Home Page</title>
    </head>
    <body>
        <nav>
            <a href = "/">Home</a>
            <a href = "/about">About</a>
            <a href = "/contact">Contact</a>
        </nav>
        <?php //echo $slot; ?>

        {{$slot}}
        <script src="" async defer></script>
    </body>
</html>