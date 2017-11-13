@extends ('layout.app')

@section('title', 'Users')
@section('description', 'Personnel Directory')

@section('content')
    {{--<section class="content">--}}
        <div class="row">
            <!-- left column -->
            <div class="box box-primary col-md-12">
                <!-- general form elements -->
                <div class="row col-md-6 col-md-offset-3">
                    <p></p>
                <div class=" box">
                    <div class="box-header with-border">
                        <h3 class="box-title">User Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="">
                        <div class="box-body  ">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter FirstName">
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" placeholder="Enter MiddleName">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter LastName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Repeat Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image">

                                <p class="help-block">Photo of user</p>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control">
                                    <option>Accounting</option>
                                    <option>Marketing/Sales</option>
                                    <option>Logistics</option>
                                    <option>Procurement</option>
                                    <option>Dispatch</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Administrator
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Accountant
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Dispatcher
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Auditor
                                </label>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer ">
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>

                    </form>
                </div>
                </div>
            </div>
        </div>
@endsection