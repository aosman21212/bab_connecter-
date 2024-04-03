@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Create stcusers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('stcusers.index') }}">stcusers</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Create stcusers</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-6">
            @include('adminlte-templates::common.errors')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Multi Columns Form</h5>

                    <!-- Multi Columns Form -->
                    {!! Form::open(['route' => 'stcusers.store']) !!}
                    <div class="text-center">
                        @include('stcusers.fields')
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('stcusers.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
