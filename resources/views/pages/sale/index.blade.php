@extends ('layout.app')
@section('title', 'Sales')
@section('description', 'No.1 Shop')
@section('content-title', 'All Orders')
@section('content-body')
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
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="label label-success">Shipped</span></td>
                <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">John Smith</div>
                </td>
                <td>10th  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-default">Cancelled</span></td>
                <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">----</div>
                </td>
                <td>13th  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">Ama Doe</div>
                </td>
                <td>1st  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR7429</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-info">Processing</span></td>
                <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">----</div>
                </td>
                <td>11th  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">----</div>
                </td>
                <td>13th  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">John Smith</div>
                </td>
                <td>2nd  Nov,2017</td>
            </tr>
            <tr>
                <td><a href="{{route('sale.show', ['id' => 1])}}">OR9842</a></td>
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
@endsection