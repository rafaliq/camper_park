<section class="section text-img @if ($data['pozycja'] == 'prawo') text-img--rev @endif">
  <div class="container">
    <div class="row text-img__wrapper justify-content-center">
      <div class="col-12 col-md-6 text-img__image-wrapper wow">
        <img class="text-img__image" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      </div>
      <div class="col-12 col-md-6 text-img__content content-block py-0">
        <div class="text">
          @if($data['header'] == 'tak')
          <h2 class="section__title">
            <span class="title">
              {{ $data['title'] }}
            </span>
            @if($data['subtitle']) 
              <span class="section__title subtitle">
                {{ $data['subtitle'] }}
              </span>
            @endif  
          </h2>
          @endif
          <p class="text">
            {!! $data['content'] !!}
          </p>
        </div>
        @if ($data['button'] == "tak")
        <a href="{{ $data['link'] }}" class="button button--big">więcej</a>
        @endif
      </div>
    </div>
  </div>
</section>