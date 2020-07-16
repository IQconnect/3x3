@php
$gallery = $data['gallery'];
@endphp

<section class="section">
  <div class="container">
    <div class="gallery">
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
