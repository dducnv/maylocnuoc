<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<x-ad_head></x-ad_head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        

     <!-- sidebar -->
     <x-ad_sidebar></x-ad_sidebar>
    
        <main class="content">
            <!-- navbar -->
            <x-ad_navbar></x-ad_navbar>

            {{-- main --}}
            @yield('main')

            <!-- footer -->
            <x-ad_footer></x-ad_footer>
        </main>
        <x-ad_script></x-ad_script>
        <!-- script -->
    
</body>

</html>
