@extends ('layout.app')
@section('title', 'Products')
@section('description', 'Products')
@section('content-title', 'All Products')
@section('content-body')
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
@endsection