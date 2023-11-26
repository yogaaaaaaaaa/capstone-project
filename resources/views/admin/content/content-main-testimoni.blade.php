@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">List Data Testimoni</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Critique & Suggestions</th>
                        <th scope="col">Product Quality</th>
                    </tr>
                    <tbody>
                        @foreach ($testimoni as $key => $item)
                            <tr>
                                <td>{{$testimoni->firstItem() + $key}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->critique_suggestions}}</td>
                                <td>{{$item->product_value}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
            <div class="d-flex justify-content-center" style="overflow: hidden;">
                {{ $testimoni->links() }}
            </div>
        </div>
    </div>
</div>

@endsection