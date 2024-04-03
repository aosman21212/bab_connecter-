

@extends('layouts.app')

@section('content')



    <div class="pagetitle">
      <h1>Channels And Businesses</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">home</a></li>
          <li class="breadcrumb-item">Channels And Businesses</li>
          <li class="breadcrumb-item active">VIEW</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Channels And Businesses</h5>
              <div class="col-lg-12">
  
              <!-- Table with stripped rows -->
              @include('channelsbusinesses.table')

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    
@endsection






