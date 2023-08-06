@extends('layouts.app')

@section('title')
    BALISKUYYY
@endsection

@section('content')
    <!--Header-->
    <Header class="text-center">
    <h1>
      Explore Bali
      <br> 
      Like Never Before
    </h1>
    <p class="mt-3">
      You will see a wonderful island 
      <br>
      A thousand temple and beautiful destinations
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
    </Header>


    <!--Main-->
    <main>
    <div class="container">
      <section class="section-stats row justify-content-center align-item-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Member</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>189</h2>
          <p>Destinations</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>85</h2>
          <p>Partner</p>
        </div>
      </section>
    </div>


    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Popupar Destinations</h2>
            <p>
              Something that you never try
              <br>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel justify-content-center">
          <div class="row">
            @foreach ($items as $item)
              <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image:  url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}') ;">
                  <div class="travel-location">{{ $item->location }}</div>
                  <div class="travel-destination">{{ $item->title }}</div>
                  <div>
                    <div class="travel-button mt-10">
                      <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                        View Details
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 col-sm-12 mt-3 text-center">
            <img src="{{ url('frontend/images/partner1.png') }}" alt="Logo Partner" class="image-partner">
            <img src="{{ url('frontend/images/partner2.png') }}" alt="Logo Partner" class="image-partner">
            <img src="{{ url('frontend/images/partner3.png') }}" alt="Logo Partner" class="image-partner" style="max-width: 50px;">
            <img src="{{ url('frontend/images/partner4.png') }}" alt="Logo Partner" class="image-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br/>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{ url('frontend/images/testimonial1.png') }}" 
                     alt="User"
                     class="mb-4 rounded-circle">
                <h3 class="mb-4">Vonzy</h3>
                <p class="testimonial">
                  " It was glorious and I could not stop to say wohooo for every singe moment. Can't wait for next Trip "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Ubud
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{ url('frontend/images/testimonial2.png') }}" 
                     alt="User"
                     class="mb-4 rounded-circle">
                <h3 class="mb-4">Gebian</h3>
                <p class="testimonial">
                  " The trip was amazing and I saw something beautiful in that island that makes me want to learn more "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Kintamani
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{ url('frontend/images/testimonial3.png') }}" 
                     alt="User"
                     class="mb-4 rounded-circle">
                <h3 class="mb-4">Kayess</h3>
                <p class="testimonial">
                  " I loved it when the waves was shaking harder and truly love amazing sunset at Jimbaran Beach. "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Karangasem
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
