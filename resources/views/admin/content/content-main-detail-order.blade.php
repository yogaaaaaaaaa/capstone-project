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
                        <th scope="col">Order Name</th>
                        <th scope="col">Order Type</th>
                        <th scope="col">Type Tshirt</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Units</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Payment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderDetail as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->order->order_name}}</td>
                            <td>{{$item->order_type}}</td>
                            <td>{{$item->type_tshirt}}</td>
                            <td>{{$item->product_id}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->total_units}}</td>
                            <td>{{$item->total_price}}</td>
                            <td>
                                @if($item->payment_status === 'Sudah Bayar')
                                    <span class="badge btn-success mx-2 text-white">Paid</span>
                                @else
                                    <span class="badge btn-warning mx-2 text-white">Unpaid</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection