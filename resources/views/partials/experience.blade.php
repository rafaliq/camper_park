

<section class="section experience @if($data['light']) experience--light @endif">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if($data['header'] == 'tak' && $data['subheader'] == 'nie')
          @include('partials.title', ['title' => $data['title']])
        @endif
        @if($data['header'] == 'tak' && $data['subheader'] == 'tak')
          @include('partials.title', ['title' => $data['title'], 'subtitle' => $data['subtitle']])
        @endif
      </div>
    </div>
  </div>
  <div class="container--small">
    <div class="timeline">
      @foreach($data['experience'] as $item)
        <div class="timeline-item">
          <div class="timeline-icon">
          </div>
          <div class="timeline-content @if($data['light']) timeline-content--light @endif @if($loop->index % 2 == 1) right @endif">
            <p class="timeline-content-date">{{ $item['date'] }}</h2>
            <p>{{ $item['desc'] }}</p>
            @if($item['gallery'])
              <div class="row no-gutters mt-4">
                @foreach($item['gallery'] as $image)
                  <div class="col-4 mr-2">
                    <a data-fancybox="gallery{{ $item['date'] }}" href="{{ $image['url'] }}">
                      <img src="{{ $image['sizes']['thumbnail'] }}" alt="{{ $image['alt'] }}" style="width: 100%; height: auto;">
                    </a>
                  </div>  
                @endforeach
              </div>
            @endif
          </div>
        </div>
      @endforeach
    </div>
    @if($data['link'])
    <div class="text-center">
      <a href="{{ $data['link'] }}" class="button button--big">zobacz więcej</a>
    </div>
    @endif
  </div>
</section>