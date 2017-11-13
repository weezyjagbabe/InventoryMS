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
                        <h3 class="box-title">Product Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="">
                        <div class="box-body  ">
                            <div class="form-group">
                                <label for="first_name">Product Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Product Name" value="Samsung TV">
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Product Description</label>
                                <textarea  class="form-control" id="Product Description">Samsung 32" 1080p 60Hz LED Smart HDTV.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Product Weight</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="10" value="98">
                                    <span class="input-group-addon">.lbs</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Height</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="10" value="32">
                                    <span class="input-group-addon">.inch</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Quantity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="100" value="83">
                                    <span class="input-group-addon">.pieces</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Unit Cost</label>
                                <div class="input-group">
                                    <span class="input-group-addon">GH¢</span>
                                    <input type="text" class="form-control" placeholder="100" value="1800">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <input type="file" id="image">

                                <p class="help-block">Photo of Product</p>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control">
                                    <option>Hardware</option>
                                    <option selected>TV</option>
                                    <option>Air-Conditioners</option>
                                    <option>TV-Accessory</option>
                                    <option>Air-Condition Accessory</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-control">
                                    <option selected>Samsung</option>
                                    <option>LG</option>
                                    <option>Sony</option>
                                    <option>Apple</option>
                                    <option>Toshiba</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked> New
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Refurbished
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Used
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Damaged
                                </label>
                            </div>

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