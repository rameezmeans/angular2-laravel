<!DOCTYPE html>
<html>

<head>
    <title>MeWL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ URL::asset('js/core-js/client/shim.min.js') }}"></script>
    <script src="{{ URL::asset('js/zone.js/dist/zone.js') }}"></script>
    <script src="{{ URL::asset('js/reflect-metadata/Reflect.js') }}"></script>
    <script src="{{ URL::asset('js/systemjs/dist/system.src.js') }}"></script>
    <script src="{{ URL::asset('js/systemjs.config.js') }}"></script>
    <link href="{{ URL::asset('css/resets.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: #32435b;
        }
    </style>
    <script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
</head>

<body>
    <mw-app>Loading...</mw-app>
</body>

</html>
