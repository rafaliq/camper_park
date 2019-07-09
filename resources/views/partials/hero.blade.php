<section class="hero">
  <div class="hero__content">
    <h1>
      <span class="hero__header headline">
        {{ $data['header'] }}
        <span class="hero__subheader subheadline">
            {{ $data['subheader'] }}
          </span>
      </span>
    </h1>
  </div>
  <img class="hero__bg" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
</section>