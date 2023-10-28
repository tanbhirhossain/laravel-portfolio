@extends('frontend.layouts.master')


@section('content')

    <section class="inner-page">
        <div class="container">
            <section id="resume" class="resume">
                <div class="container">
          
                  <div class="section-title">
                    <h2>Work Experience</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                  </div>
          
                  <div class="row">
                  
                   
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title"></h3>
                        @foreach ($works as $item)
                        <div class="resume-item">
                          <h3>{{ $item['company_name'] }}</h3>
                          <h4>{{ $item['designation'] }}</h4>
                          <h5>{{ $item['joining_date'] }} - {{ $item['end_date'] ?? 'Present'}}</h5>
                          <p><em>{{ $item['location'] ?? 'N/A' }} </em></p>
                          <ul>
                            <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                            <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                            <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                          </ul>
                        </div>
                        @endforeach
                      </div>
                    
                  </div>
          
                </div>
              </section><!-- End Resume Section -->
          
        </div>
    </section>
  
@endsection