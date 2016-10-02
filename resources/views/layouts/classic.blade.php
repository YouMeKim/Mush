<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meat name="author" content="Yumi Kim">
    <title>Mush | @yield('title')</title>

    @yield('head')

</head>
<body>

    <div id="header">
        HEADER
    </div>
    <div id="navigation">
        NAVIGATION
    </div>
    <div id="content">
        @yield('content')
    </div>

</body>
</html>
