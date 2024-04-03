




@extends('layouts.app')

@section('content')



    <div class="pagetitle">
      <h1>Clients</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashbord</a></li>
          <li class="breadcrumb-item">Clients</li>
          <li class="breadcrumb-item active">VIEW</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clients</h5>
              <div class="col-lg-12">
  
              <!-- Table with stripped rows -->
              @include('clients.table')

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    
@endsection






