






@extends('layouts.app')

@section('content')
<div class="pagetitle">
      <h1>                    Create Clients

</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">   Clients
</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">  Create Clients
</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
        @include('adminlte-templates::common.errors')

          <div class="card">
            <div class="card-body">

              {!! Form::open(['route' => 'clients.store']) !!}

<div class="card-body">

    <div class="row">
        @include('clients.fields')
    </div>

</div>

<div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default"> Cancel </a>
</div>

{!! Form::close() !!}
           

            </div>
          </div>

        </div>

        
      </div>
    </section>

@endsection
