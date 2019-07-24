{{--
  Template Name: Booking
--}}

@extends('layouts.app')

@section('content')

<section class="booking">
  <div class="container">
    <div class="row">
      @include('components.calendar')
    </div>
  </div>
</section>
 

@endsection