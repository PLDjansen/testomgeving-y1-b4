<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('./layout/partials/header')

<body>
    @include('.layout/partials/navigation')

    <div class="container">
        @yield('content')
    </div>
    {{-- @include('./layout/partials/footer') --}}

</body>

</html>