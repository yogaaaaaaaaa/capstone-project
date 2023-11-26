@extends('admin.dashboard-admin')

@section('content')

<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">List Data Account</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                    </tr>
                    <tbody>
                        @foreach ($user as $key => $item)
                            <tr>
                                <td>{{$user->firstItem() + $key}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->usertype}}</td>
                                <td>Aktif</td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
            <div class="d-flex justify-content-center" style="overflow: hidden;">
                {{ $user->links() }}
            </div>
        </div>
    </div>
</div>

@endsection