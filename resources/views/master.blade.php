<!DOCTYPE html>
<html lang="en">
<head  >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   rel="stylesheet" href="{{asset('css/bulma.css')}}">
    @yield('stylesheet')
    <title>Blog</title>
</head>
<body>

@include('partials.menu')


@yield('content')
@yield('javascript')

</body>
</html>