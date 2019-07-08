@php
  $services = $data['services'];
@endphp

<section class="section section--bg">
  <div class="container">
    <div class="services row">
      @foreach ( $services as $item )
          <div class="col-sm-6 col-lg-4 wow fadeIn">
            <div class="services__item">
              <div class="services__title">
                {{ $item['header'] }}
              </div>
              <div class="services__desc">
                {{ $item['desc'] }}
              </div>
              <a class="services__link" href="{{ $item['link'] }}">
                sprawdź szczegóły <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
      @endforeach
    </div>
  </div>
</section>