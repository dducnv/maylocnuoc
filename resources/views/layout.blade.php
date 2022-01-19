<!DOCTYPE html>
<html lang="en">
{{-- head --}}
<x-head></x-head>
<body>
<!-- Header - start -->
<x-navbar></x-navbar>
<!-- Header - end -->


<!-- Main Content - start -->
<main>
     @yield('main')
</main>
<!-- Main Content - end -->


<!-- Footer - start -->
<x-footer></x-footer>
<!-- Footer - end -->


<!-- jQuery plugins/scripts - start -->
<x-script></x-script>
<!-- jQuery plugins/scripts - end -->

</body>
</html>
