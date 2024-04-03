@extends('layouts.app')

@section('content')
<div class="pagetitle">
      <h1>Edit  Business</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('businesses.index') }}">Business</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active"> Edit  Business</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
        @include('adminlte-templates::common.errors')

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title"> edit  Business</h5> -->



            {!! Form::model($businesses, ['route' => ['businesses.update', $businesses->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('businesses.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('businesses.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

            </div>
          </div>

        </div>

        
      </div>
    </section>

@endsection
