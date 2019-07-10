@php
    $header = $data['header'];
    $subheader = $data['subheader'];
    $small = $data['small'];

    if($small)  $class = 'hero--small';
@endphp

<section class="hero {{ $class }}">
  <div class="hero__content">
    <h1>
      <span class="hero__header headline">
        {{ $header }}
        <span class="hero__subheader subheadline">
            {{ $subheader }}
          </span>
      </span>
    </h1>
  </div>
  @if(!$small)
  <video class="hero__bg" playsinline="" autoplay="" muted="" loop="" poster="{{ $data['image']['url'] }}">
    <source src="@asset('images/aris.mp4')" type="video/mp4">
  </video>
  @else
  {!! image($data['image']['id'], 'full', 'hero__bg') !!}
  @endif
  <img class="hero__cloud" src="@asset('images/cloud.png')" alt="chmury">
</section>