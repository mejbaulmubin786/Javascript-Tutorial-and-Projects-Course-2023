<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MyWebsite</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Custom inline styles if needed */
    </style>
</head>
<body>
    @include('partials.header') <!-- Include header -->
    
    <main>
        @yield('content') <!-- Main content of the page -->
    </main>
    
    @include('partials.footer') <!-- Include footer -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Custom scripts if needed
    </script>
</body>
</html>
