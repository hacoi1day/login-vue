<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="asset/vender/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="asset/vender/font-awesome.css"> --}}
    <link rel="stylesheet" href="asset/vender/fontawesome/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        body {
            /* background-color: #e9ecef; */
        }
    </style>
</head>
<body>
    <div id="app">
        <app></app>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="asset/vender/bootstrap.min.js"></script>
    <script src="asset/vender/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/vender/popper.min.js"></script>
    {{-- Load jQuery --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {{-- Font Awesome --}}
    <script defer src="asset/vender/fontawesome/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>


    <script>
        window.Laravel = {};
        window.Laravel.csrfToken = "{{ csrf_token() }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>