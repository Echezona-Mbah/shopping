@include('head')

<body>
    @include('navbar')



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/img/patek.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(51, 50, 50, 0.7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown row justify-content-center">Best Jewerlly Store</h5>
                                <h1 class="display-3 text-white animated slideInDown">Promzy’s Luxury Hub</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Elevate your style with Promzy's Hub. Discover exquisite jewelry,
                                     from statement pieces to everyday essentials, celebrating your individuality and adding timeless elegance to every moment.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Start Shopping</a>
                                <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Learn more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->








    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Available</h6>
                <h1 class="mb-5">Currently in stock</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="/img/jewellery-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Gold bracelet</h5>
                                    <small class="text-primary">78 sold</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="/img/Jewellry 2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Gold necklace</h5>
                                    <small class="text-primary">49 sold</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="/img/jewelry 3.webp" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Jacobs and co</h5>
                                    <small class="text-primary">10</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="/img/jewerly 4.avif" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Gucci nacklace</h5>
                            <small class="text-primary">79 sold</small>
                        </div>
                    </a>
                    
                </div>
            </div> <br>
            <a class="btn btn-link row justify-content-center mb-5" href="Allitems.html" style="color: azure;">See all</a>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="/img/270 by 150.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Promzy’s Luxury Hub</h1>
                    <p class="mb-4">Welcome to Promzy’ Luxury Hub, where elegance meets craftsmanship in every piece of our exquisite jewelry collection. Step into a world of timeless beauty and sophistication, where each gemstone tells a story and every design reflects unparalleled artistry. From stunning engagement
                         rings to statement necklaces and delicate earrings, our curated selection caters to every style and occasion.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rings</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Necklaces</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Earrings</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bracelets</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Anklets</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Watches</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Selling</h6>
                <h1 class="mb-5">Best selling Items</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/jewelry 3.webp" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
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
                                <small>(217)</small>
                            </div>
                            <h5 class="mb-4">Jacob & Co</h5>
                        </div>
                        <div class="d-flex border-top">
                            
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>330 Sold</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/rolex.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
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
                                <small>(93)</small>
                            </div>
                            <h5 class="mb-4">Rolex Submariner</h5>
                        </div>
                        <div class="d-flex border-top">
                            
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>130 Sold</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/patek.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
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
                </div> <br>
                
                
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="/img/jewelry 3.webp" alt="">
                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
                        <!--  -->
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
                        <small>(217)</small>
                    </div>
                    <h5 class="mb-4">Jacob & Co</h5>
                </div>
                <div class="d-flex border-top">
                    
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>330 Sold</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="course-item bg-light">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="/img/rolex.jpg" alt="">
                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
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
                        <small>(93)</small>
                    </div>
                    <h5 class="mb-4">Rolex Submariner</h5>
                </div>
                <div class="d-flex border-top">
                    
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>130 Sold</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="course-item bg-light">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="/img/patek.jpg" alt="">
                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px  30px;">Buy now</a>
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
        </div>
    </div>
            </div>
    <!-- Courses End -->


    

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/img/work profile.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">florence</h5>
                    <p>Nurse</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">My engagement ring from promzy Hub is simply breathtaking. 
                        The craftsmanship is unmatched, and every glance at it fills me with joy and gratitude.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Dave</h5>
                    <p>Doctor</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Thanks to Promzy Hub, I found the perfect birthday gift for my wife. The necklace I purchased exceeded 
                        expectations and made her shine with happiness.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/img/review 1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rashford</h5>
                    <p>Web dev</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Shopping at Promzy Hub is a true delight. The ambiance, selection, and service are top-notch, 
                        and I always find stunning pieces like the earrings that earn me countless compliments.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="/img/work profile.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Med</h5>
                    <p>Misstress</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I've been a loyal customer of Promzy for years. Their commitment to quality and customer
                         satisfaction is unmatched, and I always trust them to deliver excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    @include('footer')