@extends ('layout.app')
@section('title', 'Users')
@section('description', 'Add New User')
@section('content-title', 'User Details')
@section('content-body')
    <form class="">
        <div class="box-body">
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter FirstName">
            </div>
            <div class="form-group col-md-6">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" placeholder="Enter MiddleName">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter LastName">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Repeat Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" id="image">
            </div>
            <div class="form-group col-md-6">
                <label>Department</label>
                <select class="form-control">
                    <option>Accounting</option>
                    <option>Marketing/Sales</option>
                    <option>Logistics</option>
                    <option>Procurement</option>
                    <option>Dispatch</option>
                </select>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer ">
            <button type="submit" class="btn btn-primary">Add User</button>
        </div>
    </form>
@endsection