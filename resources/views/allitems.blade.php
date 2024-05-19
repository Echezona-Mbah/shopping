@include('head')

<body>
    @include('navbar')


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Selling</h6>
                <h1 class="mb-5">Best selling Items</h1>
            </div>

<!-- search bar Start -->
<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search...">
    <button type="button" onclick="search()">Search</button>
</div>
<!-- Search bar End -->

            <div class="row g-4 justify-content-center">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Selling</h6>
                        <h1 class="mb-5">Best selling Items</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        @foreach ($watchs as $watch)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{('uploads/' .$watch->imgs)}}" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="{{ route('details', ['id' => $watch->id]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Details</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">₦{{$watch->amount}}</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(217)</small>
                                    </div>
                                    <h5 class="mb-4">{{$watch->name}}</h5>
                                </div>
                                <div class="d-flex border-top">
                                    
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$watch->sold}} Sold</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <a href="/allitems" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">All Product</a>
        
                     
                </div>
            </div>
             
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/patek.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Add to cart</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(133)</small>
                            </div>
                            <h5 class="mb-4">Patek Philippe Nautilus</h5>
                        </div>
                        <div class="d-flex border-top">
                            
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>210 Sold</small>
                        </div>
                </div>
                 <br>
            </div> --}}

        
       

            
    <!-- Courses End -->

        

   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"> Bishop court gabigail hostel, IMO state Owerri </i></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234 704 340 7155</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>Promzysluxury<br>hub@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://wa.me/message/6SGGLOBCFYSCP1"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/PromzysLuxuryHub?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/promzysluxuryhub?igsh=dW9kZDM0ZDd2NTNx&utm_source=qr"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://t.me/+FNusIpTPCdY2NDI0"><i class="fab fa-telegram"></i></a>

                </div>
            </div>
           
           
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Promzy' Hub</a>, All Right Reserved.

                   
                    Developed By <a class="border-bottom" href="https://wa.me/message/RUXL323QNK2ND1">Chukwuemeka Emmanuel</a><br><br>
                   
                </div>
               
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>