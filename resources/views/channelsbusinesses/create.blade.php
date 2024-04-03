




@extends('layouts.app')

@section('content')
<div class="pagetitle">
      <h1>Create Channels And businesses
</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('channelsbusinesses.index') }}"> Channels And businesses
</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">   Create Channels And businesses
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

              {!! Form::open(['route' => 'channelsbusinesses.store']) !!}

<div class="card-body">

    <div class="row">
        @include('channelsbusinesses.fields')
    </div>

</div>

<div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('channelsbusinesses.index') }}" class="btn btn-default"> Cancel </a>
</div>

{!! Form::close() !!}
           

            </div>
          </div>

        </div>

        
      </div>
    </section>

@endsection
