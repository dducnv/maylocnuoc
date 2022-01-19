<!DOCTYPE html>
<html lang="en">
 {{-- head --}}
 <x-head></x-head>
    <body>
        <div class="main-wrapper">
            <x-navbar></x-navbar>
                @yield('main')
            <x-footer></x-footer>
        </div>
    </body>
 <x-script></x-script>
</html>
