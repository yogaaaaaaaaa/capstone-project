@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h4 class="mb-3">Edit Product</h4>
        <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name_product" class="form-label">Name Product</label>
                <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Enter Name Product" value="{{$product->name_product}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image Product</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*">
                @if ($product->image)
                <input type="hidden" name="existing_image" value="{{ $product->image }}">
                <p class="mt-2">Current Image: {{ $product->image }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category Type</label>
                <select class="form-control col-md-15" name="category_id" id="">
                    <option selected disabled> -- Selected Category -- </option>
                    @foreach ($categories as $item)
                    <option value="{{$item->id}}" {{$item->id == $product->category_id ? 'selected' : ''}}>{{$item->name_category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter Stock Product" value="{{$product->stock}}">
            </div>
            <div class="mb-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price Product" value="{{$product->price}}">
            </div>

            <button type="submit" class="btn" style="background-color: #eb1616; color:#ffffff;">Submit Product</button>
        </form>
    </div>
</div>
@endsection