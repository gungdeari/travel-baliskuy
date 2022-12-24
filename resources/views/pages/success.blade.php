@extends('layouts.success')
@section('title', 'Checkout success')

@section('content')
  <main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/success.png') }}" alt="">
        <h1>Yay! Success</h1>
        <p>
          We have sent you email for trip instruction
          <br>
          Please read it as well
        </p>
        <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>
  </main>
@endsection