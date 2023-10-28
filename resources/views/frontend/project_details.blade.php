@extends('frontend.layouts.master')


@section('content')

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/portfolio/portfolio-details-1.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/portfolio/portfolio-details-2.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('assets/img/portfolio/portfolio-details-3.jpg')}}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{  $project['category']}}</li>
              <li><strong>Client</strong>:{{  $project['client']}}</li>
              <li><strong>Project date</strong>: {{  $project['project_date']}}</li>
              <li><strong>Project URL</strong>: <a href="{{ $project['project_url'] }}">{{ $project['project_url'] }}</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>This is an example of portfolio detail</h2>
            <p>
             {{ $project['project_desc'] }}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

  
@endsection