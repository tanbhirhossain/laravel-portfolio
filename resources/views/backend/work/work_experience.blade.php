@extends('frontend.layouts.master')

@section('hero-container')
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Inner Page</h2>
      <ol>
        <li><a href="#">Admin</a></li>
        <li>Add Work Experience</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
@endsection
@section('content')
<section class="inner-page">

 
    <div class="container">

      <div class="d-grid gap-2">
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add Work Experience
        </button>
      </div>
     
      <hr>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company</th>
            <th scope="col">Designation</th>
            <th scope="col">Joining Date</th>
            <th scope="col">End Date</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($work_exp as $key=>$item)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item['company_name'] }}</td>
            <td>{{ $item['designation'] }}</td>
            <td>{{ $item['joining_date'] }}</td>
            <td>{{ $item['end_date'] }}</td>
          </tr>
          @endforeach
          
     
        </tbody>
      </table>
    </div>  
  </section>
  @include('backend.work.modals.create')
@endsection