
@php
    $sectiontitle = $data['headline'];
    $color = $data['scolor'];

    $buttonone = $data['mediabutton'];




@endphp

<section class="section @if($color=='white')section--white @else section--black @endif media fullscroll">
    <div class="container">
        @include('blocks.headline')
        <div class="media__content-wrapper">
            @if($buttonone)
            @foreach ($buttonone as $m)
                @php
                    $linkmedia = $m['linkmedia'];
                    $imgbuttonmedia =  $m['imgmedia']['ID'];
                    $textmedia = $m['textmedia'];
                @endphp


                <a class="media__button" href={!! $linkmedia['url'] !!}>
                    <div class="media__button-wrapper">

                        {!! image($imgbuttonmedia, 'full', 'media__img') !!}
                        <div class="media__text">
                            {!! $textmedia !!}
                        </div>
                    </div>
                </a>
                    @endforeach
                @endif
            </div>
        </div>
</section>
