@extends ('layout.app')

@section('title', 'Sales')
@section('description', 'Quality and Affordability')

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Latest Orders</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Dispatcher</th>
                        <th>Order Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="label label-success">Shipped</span></td>
                        <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">John Smith</div>
                        </td>
                        <td>10th  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-default">Cancelled</span></td>
                        <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20">----</div>
                        </td>
                        <td>13th  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="label label-danger">Delivered</span></td>
                        <td>
                            <div class="sparkbar" data-color="#f56954" data-height="20">Ama Doe</div>
                        </td>
                        <td>1st  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-info">Processing</span></td>
                        <td>
                            <div class="sparkbar" data-color="#00c0ef" data-height="20">----</div>
                        </td>
                        <td>11th  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Samsung Smart TV</td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20">----</div>
                        </td>
                        <td>13th  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="label label-danger">Delivered</span></td>
                        <td>
                            <div class="sparkbar" data-color="#f56954" data-height="20">John Smith</div>
                        </td>
                        <td>2nd  Nov,2017</td>
                    </tr>
                    <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Call of Duty IV</td>
                        <td><span class="label label-success">Shipped</span></td>
                        <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">Ama Doe</div>
                        </td>
                        <td>9th  Nov,2017</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="/order" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
            {{--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>--}}
        </div>
        <!-- /.box-footer -->
    </div>
@endsection