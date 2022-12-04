<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tabTitle . ' - ' . config('app.name') }}</title>

    <x-auth.styles />
</head>

<body class="hold-transition sidebar-mini">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <button type="button" class="btn btn-danger">Please wait...</button>
    </div>

    <div class="wrapper">

        <x-auth.navbar />

        <x-auth.sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <x-auth.footer />
    </div>
    <!-- ./wrapper -->

    <x-auth.scripts />
</body>

</html>
