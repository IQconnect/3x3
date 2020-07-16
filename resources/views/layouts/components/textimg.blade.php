
@php
    $title = $data['titletext'];
    $subtitle =$data['subtext'];
    $text = $data['maintext'];
    $imgup = $data['imgup']['ID'];
    $imgdown = $data['imgdown']['ID'];
    $imglong = $data['imglong']['ID'];

@endphp

<section class="section textimg fullscroll">
    <div class="textimg__background">
        {!! image($imgup, 'full', 'textimg__img') !!}
   </div>
    <div class="container">
        <div class="textimg__content-wrapper" >
            <div class="textimg__content">
                <div>
                    <h3 class="textimg__title">
                        {!! $title !!}
                    </h3>

                    <h4 class="textimg__subtitle">
                        {!! $subtitle !!}
                    </h4>
                    <h5 class="textimg__text">
                        {!! $text !!}
                    </h5>
                </div>
                <div class="textimg__img-wrapper">
                    <div class="textimg__twoimg">
                        <div class="textimg__squareup">
                             {!! image($imgup, 'full', 'textimg__img') !!}
                        </div>
                         <div class="textimg__squaredown">
                             {!! image($imgdown, 'full', 'textimg__img') !!}
                         </div>
                    </div>
                    <div class="textimg__long">
                        {!! image($imglong, 'full', 'textimg__img') !!}

                    </div>
                </div>
            </div>
        </div>
</section>
