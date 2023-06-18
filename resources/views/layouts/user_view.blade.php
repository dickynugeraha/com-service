<html lang="en">
    <head>
        @include('layouts.partials.header_script')
        <title>{{ $title ?? "Laatansa" }}</title>
    </head>
    <body>
        @include('layouts.partials.header_user') @yield('content_user')
        @include('layouts.partials.footer_user')
    </body>
    @yield('add_javascript') @include('layouts.partials.footer_script')
</html>
