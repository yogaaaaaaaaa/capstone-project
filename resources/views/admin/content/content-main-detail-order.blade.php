@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Detail Order</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Type</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Units</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->order_code}}</td>
                            <td>{{$item->order_type}}</td>
                            <td>{{$item->order_name}}</td>
                            <td>{{$item->order_address}}</td>
                            <td>{{$item->no_hp}}</td>
                            <td>{{$item->email}}</td>
                            <td><a href="{{$item->design_link}}">Cek Design</a></td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <a href="" class="btn btn-warning mx-2"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection