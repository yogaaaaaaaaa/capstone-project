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
                        <th scope="col">#</th>
                        <th scope="col">Image Product</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Information</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection