@extends('admin.layouts.master')

@section('title', 'Profile')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="card">
  <div class="card-header">Panjabis Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name: {{ $panjabis->name }}</h5>
        <p class="card-text">price: {{ $panjabis->price }}</p>
        <p class="card-text">subtitle: {{ $panjabis->subtitle }}</p>
        <p class="card-text">Image: <img src="{{ asset('storage/' . $panjabis->image) }}" alt="{{ $panjabis->title }}" width="100"></p>
        <p class="card-text">description: {{ $panjabis->description }}</p>
        <p class="card-text">information: {{ $panjabis->information }}</p>
  </div>
  </div>
</div>
@endsection


