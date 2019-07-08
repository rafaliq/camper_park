{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp


  @foreach ($sections as $section)
    @php ($sectionName = $section['acf_fc_layout']) @endphp

    {{-- GALLERY --}}
    @includeWhen($sectionName == 'gallery', 'partials.gallery', ['data' => $section])

    {{-- Slider --}}
    @includeWhen($sectionName == 'slider', 'partials.slider', ['data' => $section])

    {{-- hero --}}
    @includeWhen($sectionName == 'hero', 'partials.hero', ['data' => $section])

    {{-- TEXT / IMG --}}
    @includeWhen($sectionName == 'textImg', 'partials.text-img', ['data' => $section])

    {{-- Services --}}
    @includeWhen($sectionName == 'services', 'partials.services', ['data' => $section])

    {{-- Banner --}}
    @includeWhen($sectionName == 'banner', 'partials.banner', ['data' => $section])

    {{-- experience --}}
    @includeWhen($sectionName == 'experience', 'partials.experience', ['data' => $section])

    {{-- PAGE TITLE --}}
    @includeWhen($sectionName == 'pageTitle', 'partials.page-title', ['data' => $section])

    {{-- hr --}}
    @includeWhen($sectionName == 'hr', 'partials.hr')

    {{-- CONTENT --}}
    @includeWhen($sectionName == 'Content', 'partials.content-page')

  @endforeach

@endsection