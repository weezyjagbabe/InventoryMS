<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('title')
            <small>@yield('description')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('title')</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="box box-primary">
                <!-- general form elements -->
                <div class="col-lg-8 col-lg-offset-2">
                    <p></p>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">@yield('content-title')</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @yield('content-body')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>