<html>
    <head>
        {{-- Bootstrap CSS --}}
        <link href="{{ asset('/assets/bootstrap@5.1.3/css/bootstrap.min.css') }}" rel="stylesheet">
        {{-- Fontawesome CSS --}}
        <link href="{{ asset('/assets/fontawesome@6.1.1/css/all.css') }}" rel="stylesheet">
        <title>{{ $title ?? 'FAH' }}</title>
    </head>
    <body>
        {{ $slot }}
        {{-- Bootstrap JS --}}
        <script src="{{ asset('/assets/bootstrap@5.1.3/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>