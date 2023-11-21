@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">List Data Product</h6>
        <a href="{{route('product.create')}}" class="btn mb-3" style="background-color: #eb1616; color:#ffffff;"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
        <a href="{{route('category.index')}}" class="btn mb-3 mx-2" style="background-color: #eb1616; color:#ffffff;">Category</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image Product</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $key => $item)
                        <tr>
                            <td>{{$product->firstItem() + $key}}</td>
                            <td><img src="{{ asset('images/content/' . $item->image) }}" alt="Image" class="img-fluid" width="70"></td>
                            <td>{{$item->name_product}}</td>
                            <td>{{$item->category->name_category}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->price}}</td>
                            <td class="d-flex">
                                <a href="{{route('product.edit', $item->id)}}" class="btn btn-warning mx-2"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color: #eb1616 !important;"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center" style="overflow: hidden;">
                {{ $product->links() }}
            </div>
        </div>
    </div>
</div>
@endsection