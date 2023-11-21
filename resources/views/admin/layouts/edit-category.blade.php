@extends('admin.dashboard-admin')

@section('content')
<div class="container p-4">
    <div class="bg-secondary rounded h-100 p-4">
        <h4 class="mb-3">Edit Category</h4>
        <form action="{{route('category.update', $categories->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="form-label">Name Category</label>
                <input type="text" class="form-control" id="name" name="name_category" placeholder="Enter Name Category" value="{{$categories->name_category}}">
            </div>

            <button type="submit" class="btn" style="background-color: #eb1616; color:#ffffff;">Submit Category</button>
        </form>
    </div>
</div>
@endsection