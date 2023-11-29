@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">List Data Orders</h6>
        <a href="{{route('orderDetail.index')}}" class="btn mb-3" style="background-color: #eb1616; color:#ffffff;">Order Detail</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Nomor Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Design</th>
                        <th scope="col">Description</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->order_code}}</td>
                            <td>{{$item->order_name}}</td>
                            <td>{{$item->order_address}}</td>
                            <td>
                                <a href="https://wa.me/62{{ substr($item->no_hp, 1) }}" target="_blank" class="btn btn-sm btn-success text-white">Hubungi</a>
                            </td>     
                            <td>{{$item->email}}</td>
                            <td><a href="{{$item->design_link}}">klik disini</a></td>
                            <td>{{$item->description}}</td>
                            <td>
                                @if($item->payment_status === 'Sudah Bayar')
                                    <span class="badge btn-success mx-2 text-white">Paid</span>
                                @else
                                    <span class="badge btn-warning mx-2 text-white">Unpaid</span>
                                @endif
                            </td>
                            <td>{{$item->order_status}}</td>
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