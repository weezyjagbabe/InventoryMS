@extends ('layout.app')
@section('title', 'Users')
@section('description', 'Viewing User')
@section('content-title', 'User Details')
@section('content-body')
    <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Administrator</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">

                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Alexander</h5>
                            <span class="description-text">first name</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Brain</h5>
                            <span class="description-text">Middle Name</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">Pierce</h5>
                            <span class="description-text">Last Name</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <div class="col-sm-6 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Email:</h5>
                            {{--<span class="description-text">Email</span>--}}
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="description-block">
                            {{--<h5 class="description-header">joeyb@smithy.brain</h5>--}}
                            <span class="description-text">joeyb@smithy.brain</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <div class="col-sm-6 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Department:</h5>
                            {{--<span class="description-text">Email</span>--}}
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="description-block">
                            {{--<h5 class="description-header">joeyb@smithy.brain</h5>--}}
                            <span class="description-text">Accounts</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <div class="col-sm-6 border-right">
                        <div class="description-block">
                            <h5 class="description-header">User Role:</h5>
                            {{--<span class="description-text">Email</span>--}}
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="description-block">
                            {{--<h5 class="description-header">joeyb@smithy.brain</h5>--}}
                            <span class="description-text">Administrator</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
@endsection