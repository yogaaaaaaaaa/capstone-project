@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Financial Income Report</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Order Name</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Income</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($financialReports as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->order->order_name}}</td>
                            <td>
                                @if($item->order->payment_status === 'Sudah Bayar')
                                    <span class="badge btn-success mx-2 text-white">Paid</span>
                                @else
                                    <span class="badge btn-warning mx-2 text-white">Unpaid</span>
                                @endif
                            </td>
                            <td>{{$item->order->detailorder->total_price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection