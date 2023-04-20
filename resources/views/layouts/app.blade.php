<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="{{ mix('/js/app.js') }}"></script>

</head>
<body>
    <div id="app" data-page="{{ json_encode($page) }}"></div>
</body>
</html>
