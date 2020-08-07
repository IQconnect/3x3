@php
$gallery = $data['gallery'];
@endphp

<section class="gallery section section--post">
  <div class="container container--slim">
    @include('blocks.headline')
    <div class="gallery__wrapper">
      @php
        $galleryName = rand(1, 999);
      @endphp
      @foreach ($gallery as $img)
        <div class="gallery__imagewrapper">
          <a data-fancybox="gallery{{$galleryName}}" href="{{ $img['url'] }}">
            <img class="gallery__image" src="{{ $img['sizes']['medium'] }}">
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>
