<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Network</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    @include('templates.partials.navigation')
    <div class="container">
        @include('templates.partials.alert')
        @yield('content')
    </div>

</body>
</html>