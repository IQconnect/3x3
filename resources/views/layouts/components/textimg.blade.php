
@php
    $sectiontitle = $data['headline'];
    $text = $data['maintext'];
    $imgbg = $data['imgbg']['ID'];
    $imglogo = $data['imglogo']['ID'];
    $color = $data['scolor'];

@endphp

<section class="section @if($color=='white')section--white @else section--black @endif textimg fp-auto-height-responsive fullscroll">
    <div class="container">
        @include('blocks.headline')
        <div class="textimg__content-wrapper" >
                @if($imglogo)
                    <div class="textimg__logo">
                        {!! image($imglogo, 'full', 'textimg__img') !!}
                   </div>
                @endif
                    <h3 class="textimg__text">
                        {!! $text !!}
                    </h3>
                </div>
            </div>
</section>
