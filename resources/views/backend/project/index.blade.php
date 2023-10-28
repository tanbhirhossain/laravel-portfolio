@extends('frontend.layouts.master')

@section('hero-container')
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Poject</h2>
      <ol>
        <li><a href="#">Admin</a></li>
        <li>Add Project</li>
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
          Add Project
        </button>
      </div>
     
      <hr>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Client</th>
            <th scope="col">Project Date</th>
            <th scope="col">Project URl</th>
            <th scope="col">Project Description</th>


          </tr>
        </thead>
        <tbody>

          @isset($projects)
          @foreach ($projects as $key=>$item)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item['category'] }}</td>
            <td>{{ $item['client'] }}</td>
            <td>{{ $item['project_date'] }}</td>
            <td>{{ $item['project_url'] }}</td>
          </tr>
          @endforeach
          @endisset
         
          
     
        </tbody>
      </table>
    </div>  
  </section>
  @include('backend.project.modals.create')
@endsection