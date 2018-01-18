<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Granary | V8CH</title>

    <base href="/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Data from Previous POST -->
    <meta name="posted" content='{!! $posted !!}'>

    <!-- Server-Side Validation Errors -->
    <meta name="server-errors" content='{{ $serverErrors }}'>

    <!-- Site style -->
    <!--suppress HtmlUnknownTarget -->
    <link href="{{ asset('css/granary-auth-bootstrap.css') }}" rel="stylesheet">

</head>

<body>

<div id="granary-auth"></div>

@include('combine::includes.svg')

<!-- Granary Application Scripts -->
<!--suppress JSUnresolvedLibraryURL -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/granary-vendor-react.js') }}"></script>
<script src="{{ asset('js/granary-auth.js') }}"></script>

</body>

</html>
