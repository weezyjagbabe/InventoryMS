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
                    <div class="product-img">
                        <img src="dist/img/sumsung.jpeg" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="/productinfo" class="product-title">Samsung TV
                            <span class="label label-info pull-right">GH¢ 1800</span>

                        </a>

                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                        <span class="label label-success">83 pieces</span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/bicycle.jpeg" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Bicycle
                            <span class="label label-info pull-right">GH¢ 700</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                        <span class="label label-danger">0 pieces</span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/xbox.jpg" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Xbox One <span
                                    class="label label-info pull-right">GH¢ 350</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                        <span class="label label-warning">7 pieces</span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/playstation-4.png" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">PlayStation 4
                            <span class="label label-info pull-right">GH¢ 399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                        <span class="label label-success">60 pieces</span>
                    </div>
                </li>
                <!-- /.item -->
            </ul>
        </div>
        <!-- /.box-body -->
        {{--<div class="box-footer text-center">--}}
            {{--<a href="javascript:void(0)" class="uppercase">View All Products</a>--}}
        {{--</div>--}}
        <!-- /.box-footer -->
    </div>
@endsection