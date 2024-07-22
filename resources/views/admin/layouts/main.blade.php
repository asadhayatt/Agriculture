<!DOCTYPE html>
<html lang="en">


@include('admin.layouts.header')

@include('admin.layouts.navbar')

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">

            @include('admin.layouts.sidebar')

            <div class="main-panel">

                @yield('main-container')

            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.layouts.footer')


    @include('sweetalert::alert')

</body>

</html>
