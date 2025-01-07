<!doctype html>
<html lang="en">
@include('admin.partial.head')

<body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
    <div class="wrapper">
        @include('admin.partial.navbar')





        @include('admin.partial.sidebar')


        <main role="main" class="main-content">

            @yield('content')

        </main> <!-- main -->
    </div>
    <!-- .wrapper -->
    @include('admin.partial.scripts')
    <script>
        function confirmDelete(id) {
            let choice = confirm("{{ __('keywords.are_you_sure') }}");
            if (choice) {
                // alert(id);
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
</body>

</html>
