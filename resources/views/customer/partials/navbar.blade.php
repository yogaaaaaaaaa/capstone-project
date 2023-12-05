{{-- Navbar Start --}}
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container p-lg-3">
        <a class="navbar-brand text-white" href="#" style="font-weight: 700; font-family:'Poppins'; font-size:1.5rem;">Hang Siji</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Service
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('orderSablon')}}">Order Sablon</a></li>
                <li><a class="dropdown-item" href="{{route('orderProduct')}}">Order Tshirt</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('tracking')}}">Tracking</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('team.index')}}">Team</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
            </li>
        </ul>
        <img src="{{asset('assets/img/user.jpg')}}" alt="" class="user-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu shadow">
            <div class="user-info">
                <img src="{{asset('assets/img/user.jpg')}}" alt="">
                <h4 class="text-white">{{ Auth::user()->name }}</h2>
            </div>
            <hr>

            {{-- <a href="#" class="sub-menu-link">
                <div class="content-left">
                <img src="{{asset('assets/img/profile.png')}}" alt="">
                </div>
                <div class="content-right">
                <p>Edit Profile</p>
                <span>&gt;</span>
                </div>
            </a>
            <a href="#" class="sub-menu-link">
                <div class="content-left">
                <img src="{{asset('assets/img/setting.png')}}" alt="">
                </div>
                <div class="content-right">
                <p>Setting</p>
                <span>&gt;</span>
                </div>
            </a> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" class="sub-menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
                <div class="content-left">
                    <img src="{{asset('assets/img/logout.png')}}" alt="">
                </div>
                <div class="content-right">
                    <p>Logout</p>
                    <span>&gt;</span>
                </div>
                </a>      
            </form>
            </div>
        </div>
        </div>
    </div>
</nav>
</div>
{{-- Navbar End --}}