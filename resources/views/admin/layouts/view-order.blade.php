@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Order Info</h6>
        <div class="detail">
            <div class="row">
                <div class="col-md-6">
                    <h6>Nomor Code</h6>
                    <p>{{$viewOrder->order_code}}</p>
                    <h6>Name</h6>
                    <p>{{$viewOrder->order_name}}</p>
                    <h6>Address</h6>
                    <p>{{$viewOrder->order_address}}</p>
                    <h6>Nomor Hp</h6>
                    <p>{{$viewOrder->no_hp}}</p>
                    <h6>Email</h6>
                    <p>{{$viewOrder->email}}</p>
                </div>
                <div class="col-md-6">
                    <h6>Design</h6>
                    <p><a href="{{$viewOrder->design_link}}"><span class="badge btn-danger mx-2 text-white">Klik disini</span></a></p>
                    <h6>Description</h6>
                    <p>{{$viewOrder->description}}</p>
                    <h6>Payment Status</h6>
                    <p>
                        @if($viewOrder->payment_status === 'Sudah Bayar')
                            <span class="badge btn-success mx-2 text-white">Paid</span>
                        @else
                            <span class="badge btn-warning mx-2 text-white">Unpaid</span>
                        @endif
                    </p>
                    <h6>Order Status</h6>
                    <p>{{$viewOrder->order_status}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection