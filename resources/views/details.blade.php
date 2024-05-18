@include('head')

    
 <body>
    @include('sweetalert::alert')

 @include('navbar')


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @foreach ($watch as $item)
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('uploads/' .$item->imgs)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">{{ $item->name }}</h1>
                    <p class="mb-4">{{ $item->discription }}</p>
    
                    <!-- Your other details here -->
                    <form action="{{ route('cart.add', $item->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary py-3 px-5 mt-2">Add to Cart</button>
                    </form>                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->




    

  
        

@include('footer')