@extends ('layout.app')

@section('title', 'Users')
@section('description', 'Personnel Directory')

@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">All Members</h3>

            <div class="box-tools pull-right">
                <span class="label label-danger">8 New Members</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <ul class="users-list clearfix">
                <li>
                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="/userinfo">Alexander Pierce</a>
                    <span class="users-list-date">Administrator</span>
                </li>
                <li>
                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">Accountant</span>
                </li>
                <li>
                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">Dispatcher</span>
                </li>
                <li>
                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">Auditor</span>
                </li>
                <li>
                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">Sales Manager</span>
                </li>
                <li>
                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">Project Manager</span>
                </li>
                <li>
                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nora</a>
                    <span class="users-list-date">Security</span>
                </li>
                <li>
                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nadia</a>
                    <span class="users-list-date">Dispatcher</span>
                </li>
            </ul>
            <!-- /.users-list -->
        </div>
        <!-- /.box-body -->
        {{--<div class="box-footer text-center">--}}
            {{--<a href="javascript:void(0)" class="uppercase">View All Users</a>--}}
        {{--</div>--}}
        <!-- /.box-footer -->
    </div>
@endsection