@include('sweetalert::alert')
   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="/img/favicon 50 by 30.png" alt="Image description">Promzy’s Luxury Hub</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact us</a>
            <a href="{{ route('cart.view') }}" class=" nav-item nav-link btn btn-primary py-4 px-lg-5 d-lg-block">
                Cart <i class="bi bi-cart"></i>
                @if(isset($cartCount) && $cartCount > 0)
                    <span class="badge bg-danger">{{ $cartCount }}</span>
                @endif
            </a>
            
        </div>
        {{-- <a href="{{ route('cart.view') }}" class=" nav-item nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">
            Cart <i class="bi bi-cart"></i>
            @if(isset($cartCount) && $cartCount > 0)
                <span class="badge bg-danger">{{ $cartCount }}</span>
            @endif
        </a> --}}
    </div>
</nav>



<!-- Navbar End -->