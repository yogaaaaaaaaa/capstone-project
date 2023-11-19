@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">List Data Category</h6>
        <a href="{{route('category.create')}}" class="btn mb-3" style="background-color: #eb1616; color:#ffffff;"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
        <div class="table-responsive">
            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name_category}}</td>
                            <td class="d-flex">
                                <a href="{{route('category.edit', $item->id)}}" class="btn btn-warning mx-2"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <form action="{{route('category.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color:#eb1616 !important;"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection