<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include SB Admin CSS -->
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.navbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- Include SB Admin JS -->
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
