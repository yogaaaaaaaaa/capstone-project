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
                        <th scope="col">Order Date</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Income</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $overallIncome = 0;
                    @endphp
                    @foreach ($financialReports as $key => $item)
                        @php
                            $totalPrice = 0;
                        @endphp
                        @foreach ($item->detailorder as $detailOrder)
                            @php
                                $totalPrice += $detailOrder->total_price;
                            @endphp
                        @endforeach
                        <tr>
                            <td>{{ $financialReports->firstItem() + $key }}</td>
                            <td>{{ $item->order_name }}</td>
                            <td>{{ $item->created_at->format('d F Y') }}</td>
                            <td>
                                @if ($item->payment_status === 'Sudah Bayar')
                                    <span class="badge btn-success mx-2 text-white">Paid</span>
                                @else
                                    <span class="badge btn-warning mx-2 text-white">Unpaid</span>
                                @endif
                            </td>
                            <td>Rp. {{ $totalPrice }}</td>
                        </tr>
                        @if ($item->payment_status === 'Sudah Bayar')
                            @php
                                $overallIncome += $totalPrice;
                            @endphp
                        @endif
                    @endforeach
                </tbody>
            </table>
            <h6>Overall Income : Rp. {{ $overallIncome }}</h6>
            <div class="d-flex justify-content-center" style="overflow: hidden;">
                {{ $financialReports->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
