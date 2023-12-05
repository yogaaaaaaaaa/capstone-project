@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h4 class="mb-3">Edit Order Proses</h4>
        <form action="{{route('order.update', $order->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="order_status" class="form-label">Update Order Status</label>
                <select class="form-select" id="order_status" name="order_status">
                    @foreach($order->status_options as $status)
                        <option value="{{ $status }}" {{ $order->order_status === $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn" style="background-color: #eb1616; color:#ffffff;">Submit Category</button>
        </form>
    </div>
</div>
@endsection