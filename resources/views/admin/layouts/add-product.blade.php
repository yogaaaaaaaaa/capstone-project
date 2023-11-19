@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h4 class="mb-3">Add Product</h4>
        <form action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name Product</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name Product">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image Product</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">Category Type</label>
                <select class="form-control col-md-15" name="categories_id" id="">
                    <option selected disabled> -- Selected Category -- </option>
                    {{-- @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price Product">
            </div>

            <button class="btn" style="background-color: #eb1616; color:#ffffff;">Submit Product</button>
        </form>
    </div>
</div>
@endsection