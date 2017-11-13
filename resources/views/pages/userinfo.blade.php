@extends ('layout.app')

@section('title', 'Users')
@section('description', 'Personnel Directory')

@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">User Information</h3>

            <div class="box-tools pull-right">
                <span class="label label-danger">Alexander Pierce</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
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
                            {{--<div class="col-sm-4 border-right">--}}
                                {{--<div class="description-block">--}}
                                    {{--<h5 class="description-header">3,200</h5>--}}
                                    {{--<span class="description-text">SALES</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.description-block -->--}}
                            {{--</div>--}}
                            {{--<!-- /.col -->--}}
                            {{--<div class="col-sm-4 border-right">--}}
                                {{--<div class="description-block">--}}
                                    {{--<h5 class="description-header">13,000</h5>--}}
                                    {{--<span class="description-text">FOLLOWERS</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.description-block -->--}}
                            {{--</div>--}}
                            {{--<!-- /.col -->--}}
                            {{--<div class="col-sm-4">--}}
                                {{--<div class="description-block">--}}
                                    {{--<h5 class="description-header">35</h5>--}}
                                    {{--<span class="description-text">PRODUCTS</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.description-block -->--}}
                            {{--</div>--}}
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
            <!-- /.users-list -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <a href="/updateuser" class="uppercase">Update User Info</a>
        </div>
        <!-- /.box-footer -->
    </div>
@endsection