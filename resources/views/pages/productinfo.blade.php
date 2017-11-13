@extends ('layout.app')

@section('title', 'Products')
@section('description', 'Your last stop!!!')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Products</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul class="products-list product-list-in-box">
                <li class="item">
                    <div class="product col-md-4 col-md-offset-4">
                        <img src="dist/img/samsung1.jpeg" alt="Product Image" width="300" height="300">
                    </div>
                    <div class="product col-md-6 col-md-offset-3">
                        <span><strong>Product Name: </strong></span><a href="javascript:void(0)" class="product-title">Samsung TV
                            {{--<span class="label label-info pull-right"><span><strong>Unit Cost: </strong></span>GH¢ 1800</span>--}}

                        </a><br>

                        <span><strong>Product Description: </strong><span class="product">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span></span>
                        <br>

                        <span><strong>Quantity: </strong><span class="product">
                          83 pieces
                        </span></span>
                        {{--<span class="label label-success">83 pieces</span>--}}
                        <br>

                        <span><strong>Unit Cost: </strong><span class="product">
                          GH¢ 1800
                        </span></span>
                        <br>

                        <span><strong>Brand: </strong><span class="product">
                          Samsung
                        </span></span>
                        <br>

                        <span><strong>Category: </strong><span class="product">
                          Television
                        </span></span>
                        <br>

                        <span><strong>Height: </strong><span class="product">
                          32 inches
                        </span></span>
                        <br>

                        <span><strong>Weight: </strong><span class="product">
                          98 lbs
                        </span></span>
                        <br>

                        <span><strong>Condition: </strong><span class="product">
                          New
                        </span></span>
                    </div>
                </li>
                <!-- /.item -->

                <!-- /.item -->
            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <a href="/updateproduct" class="uppercase">Update Product</a>
        </div>
        <!-- /.box-footer -->
    </div>
@endsection