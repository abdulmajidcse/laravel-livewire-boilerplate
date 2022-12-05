<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tabTitle . ' - ' . config('app.name') }}</title>

    <x-auth.styles />
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">

    <!-- Preloader -->
    <x-loading preloader />

    <div class="wrapper">

        <x-auth.navbar />

        <x-auth.sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->

        <x-auth.footer />
    </div>
    <!-- ./wrapper -->

    <x-auth.scripts />
</body>

</html>
