<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>HangSiji</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->usertype }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('product.index')}}" class="nav-item nav-link"><i class="fas fa-archive me-2"></i>Product</a>
            <a href="#" class="nav-item nav-link"><i class="fas fa-shopping-bag me-2"></i>Orders</a>
            <a href="{{route('testimoni.index')}}" class="nav-item nav-link"><i class="fas fa-quote-right me-2"></i>Testimonials</a>
            <a href="{{route('user.index')}}" class="nav-item nav-link"><i class="fas fa-user-alt me-2"></i>Account</a>
            <a href="#" class="nav-item nav-link"><i class="fas fa-hand-holding-usd me-2"></i>Financial</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->