<section class="section @if ($data['button'] == "tak") section--bg @endif text-img @if ($data['pozycja'] == 'prawo') text-img--rev @endif">
    <div class="container">
        <div class="row text-img__wrapper justify-content-center">
            <div class="col-12 col-md-6 text-img__image-wrapper wow">
                <img class="text-img__image" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
            </div>
            <div class="col-12 col-md-6 text-img__content content-block py-0">
                <div class="content-block__content text">
                    @if($data['header'] == 'tak')
                    <h2 class="title">
                        {{ $data['title'] }}
                    </h2>
                    @endif
                    {!! $data['content'] !!}
                </div>
                @if ($data['button'] == "tak")
                    <a href="{{ $data['link'] }}" class="button">czytaj więcej</a>
                @endif
            </div>
        </div>
    </div>
</section>