<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->

    <div class="main-panel">
        <div class="content-wrapper">


            @if(session()->get('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="category">
                <h2>Order</h2>

                <form action="{{url('add_category')}}" method="post">
                    @csrf

                </form>

                <table class="cat-table">
                    <tr class="table-row1">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>

                    </tr>

                    @foreach($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->deliver_status}}</td>
                        <td><img src="/product/{{$order->image}}" width="80%" height="70%"></td>
                    </tr>

                        @endforeach

                </table>


        </div>
    </div>

@include('admin.script')
</body>
</html>
