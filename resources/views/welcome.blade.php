<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>React Laravel</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="example"></div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
