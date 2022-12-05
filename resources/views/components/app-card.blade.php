<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{ $leftHeader }}
            </div><!-- /.col -->
            @isset($rightHeader)
                <div class="col-sm-6">
                    <div class="float-right">{{ $rightHeader }}</div>
                </div><!-- /.col -->
            @endisset
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        {{ $slot }}
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
