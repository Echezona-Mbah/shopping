@include('head')

    
 <body>
 @include('navbar')


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