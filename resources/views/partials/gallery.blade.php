@php
    $gallery = $data['gallery'];
@endphp

<section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @includeWhen($data['header'] == 'tak', 'partials.title', ['title' => $data['title'], 'content'=> $data['text'], 'white' => $data['white']])
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="gallery">
                   @php
                    $galleryName = rand(1, 999); 
                   @endphp
                   @foreach ($gallery as $img)
                    <a
                        data-fancybox="gallery{{$galleryName}}"
                        href="{{ $img['url'] }}"
                    >
                        <img class="gallery__image" src="{{ $img['sizes']['medium'] }}">
                    </a>
                   @endforeach
               </div>
            </div>
        </div>
    </div>
</section>