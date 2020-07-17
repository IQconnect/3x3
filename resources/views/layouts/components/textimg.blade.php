
@php
    $sectiontitle = $data['headline'];
    $text = $data['maintext'];
    $imgbg = $data['imgbg']['ID'];
    $imglogo = $data['imglogo']['ID'];

@endphp

<section class="section textimg fullscroll">
    <div class="textimg__background">
        {!! image($imgbg, 'full', 'textimg__img') !!}
   </div>
    <div class="container">
        @include('blocks.headline')
        <div class="textimg__content-wrapper" >
            <div class="textimg__content">
                    <div class="textimg__logo">
                        {!! image($imglogo, 'full', 'textimg__img') !!}
                   </div>
                    <h3 class="textimg__text">
                        {!! $text !!}
                    </h3>
                </div>
            </div>
        </div>
</section>
