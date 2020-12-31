@extends('layouts.app')

@section('title', "NOMADS | Travel")

@section('content')

 <!-- Jumbotron / Header -->
    <header class="text-center img-fluid">
        <h1>Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
    <!-- Akhir Jumbotron / Header -->

    <!-- Main -->
   <main>
      <div class="container">
         <section class="section-stats row justify-content-center" id="stats">
               <div class="col-3 col-md-2 stats-detail">
                  <h2>20K</h2>
                  <p>Members</p>
               </div>
               <div class="col-3 col-md-2 stats-detail">
                  <h2>12</h2>
                  <p>Contries</p>
               </div>
               <div class="col-3 col-md-2 stats-detail">
                  <h2>5K</h2>
                  <p>Hotel</p>
               </div>
               <div class="col-3 col-md-2 stats-detail">
                  <h2>72</h2>
                  <p>Patners</p>
               </div>
         </section>
      </div>

      <!-- Wisata Popular -->
      <section class="section-popular" id="popular">
         <div class="container">
               <div class="row">
                  <div class="col text-center section-popular-heading">
                     <h2>Wisata Popular</h2>
                     <p>Something that you never try
                           <br>
                     before in this world</p>
                  </div>
               </div>
         </div>
      </section>

      <!-- Gambar wisata -->
      <section class="section-popular-content" id="popularContent">
         <div class="container">
               <div class="section-popular-travel row justify-content-center">
                  <div class="col-10 col-md-4 col-lg-3">
                     <div class="card-travel text-center d-flex flex-column"
                     style="background-image: url('frontend/images/BROMO.jpg');">
                           <div class="travel-country">INDONESIA</div>
                           <div class="travel-location">BROMO, MALANG</div>
                           <div class="travel-button mt-auto">
                              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                 View Details
                              </a>
                           </div>
                     </div>
                  </div>
                  <div class="col-10 col-md-4 col-lg-3">
                     <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/NUSA-PENIDA.jpg');">
                           <div class="travel-country">INDONESIA</div>
                           <div class="travel-location">NUSA PENIDA</div>
                           <div class="travel-button mt-auto">
                              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                 View Details
                              </a>
                           </div>
                     </div>
                  </div>
                  <div class="col-10 col-md-4 col-lg-3">
                     <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/everest@2x.jpg');">
                           <div class="travel-country">ITALY</div>
                           <div class="travel-location">TOWER PISA</div>
                           <div class="travel-button mt-auto">
                              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                 View Details
                              </a>
                           </div>
                     </div>
                  </div>
                  <div class="col-10  col-md-4 col-lg-3">
                     <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/DUBAI.jpg');">
                           <div class="travel-country">DUBAI</div>
                           <div class="travel-location">BURJ KHALIFA</div>
                           <div class="travel-button mt-auto">
                              <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                 View Details
                              </a>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      </section>
      
      <!-- oUR NETWORKS -->
      <section class="section section-network" id="networks">
         <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <h2>Our Networks</h2>
                     <p>
                           Companies are trusted us
                           <br>
                           more than just a trip
                     </p>
                  </div>
                  <div class="col-md-8 text-center">
                     <img src="/frontend/images/logo-partner.png" alt="Logo Partner" class="img-partner">
                  </div>
               </div>
      </section>

      <!-- Testimonial -->
      <section class="section-testimonial-heading" id="testimonialHeading">
         <div class="container">
               <div class="row">
                  <div class="col text-center">
                     <h2>They Are Loving Us</h2>
                     <p>
                           Moments were giving them
                           <br>
                           the best experience
                     </p>
                  </div>
               </div>
         </div>
         </section>
      </div>

      <section class="section section-testimonial-content">
         <div class="container" id="testimonialContent">
               <div class="section-popular-travel row justity-content-center">
                  <div class="col-10 col-md-6 col-lg-4 content-testi">
                     <div class="card card-testimonial text-center">
                           <div class="testimonial-content">
                              <img src="/frontend/images/jenny.jpg" alt="Bebeb Jenny" class="mb-4 rounded-circle">
                              <h3 class="mb-5">Bebeb Jenny</h3>
                              <p class="testimonial">
                                 " I loved it when the waves
                                 was shaking harder - I was
                                 scared too "
                              </p>
                           </div>
                           <hr>
                           <p class="trip-to mt-2">
                              Trip to Karimun Jawa, Indonesia
                           </p>
                     </div>
                  </div>
                  <div class="col-10 col-md-6 col-lg-4 content-testi">
                     <div class="card card-testimonial text-center">
                           <div class="testimonial-content">
                              <img src="/frontend/images/angga.png" alt="Angga nih" class="mb-4 rounded-circle">
                              <h3 class="mb-5">Muhammad Angga</h3>
                              <p class="testimonial">
                                 " It was glorious and I could
                                 not stop to say wohooo for
                                 every single moment
                                 Syukrooon "
                              </p>
                           </div>
                           <hr>
                           <p class="trip-to mt-2">
                              Trip to Cikereteg, Indonesia
                           </p>
                     </div>
                  </div>
                  <div class="col-10 col-md-6 col-lg-4 content-testi">
                     <div class="card card-testimonial text-center">
                           <div class="testimonial-content">
                              <img src="/frontend/images/sunny.jpg" alt="Sunny Yee" class="mb-4 rounded-circle">
                              <h3 class="mb-5">Sunny Yee</h3>
                              <p class="testimonial">
                                 " The trip was amazing and
                                 I saw something beautiful in
                                 that island that makes me
                                 want to learn more "
                              </p>
                           </div>
                           <hr>
                           <p class="trip-to mt-2">
                              Trip to Ubud
                           </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 text-center">
                     <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                           I Need Help
                     </a>
                     <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                           Get Started
                     </a>
                  </div>
               </div>
         </div>
      </section>
   </main>
    <!-- Akhir main  -->

@endsection
