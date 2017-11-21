@extends ('layout.app')

@section('title', 'Products')
@section('description', 'Add new stock')

@section('content')
    {{--<section class="content">--}}
    <div class="row">
        <!-- left column -->
        <div class="box box-primary">
            <!-- general form elements -->
            <div class="col-lg-8 col-lg-offset-2">
                <p></p>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="">
                        <div class="box-body">
                            <br>
                            <div class="form-group col-md-6">
                                <label for="first_name">Product Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Product Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Product Weight</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="10">
                                    <span class="input-group-addon">.lbs</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Product Height</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="10">
                                    <span class="input-group-addon">.inch</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Quantity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="100">
                                    <span class="input-group-addon">.pieces</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Unit Cost</label>
                                <div class="input-group">
                                    <span class="input-group-addon">GH¢</span>
                                    <input type="text" class="form-control" placeholder="100">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image">Product Image</label>
                                <input type="file" id="image">

                                <p class="help-block">Photo of Product</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <select class="form-control">
                                    <option>Hardware</option>
                                    <option>TV</option>
                                    <option>Air-Conditioners</option>
                                    <option>TV-Accessory</option>
                                    <option>Air-Condition Accessory</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Brand</label>
                                <select class="form-control">
                                    <option>Samsung</option>
                                    <option>LG</option>
                                    <option>Sony</option>
                                    <option>Apple</option>
                                    <option>Toshiba</option>
                                </select>
                            </div>
                        <!-- /.box-body -->
                        <div class="box-footer ">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection