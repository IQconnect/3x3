
@php
    $shortcode = $data['shortcode'];
    $tooltips = $data['tooltips'];
    $logo = option('heroimage');
    $modal =  get_field('modal','option');
    $modalmobile =  get_field('modalmobile','option');
    $i = 0;
@endphp


<section class="hero fullscroll">
    <div class="hero__selection">
    {!! do_shortcode( "[".$shortcode."]" ); !!}
    </div>
    <div class="hero__wrapper">
        <div class="hero__contain">
            <div class="hero__carousel hero-carousel">
                @foreach($modalmobile as $item)
                    @php
                        $img = $item['imagealt'];
                        $i = $item['mobileid'];
                    @endphp
                    <div class="hero__cell" >
                        <a class="imp-shape-extra" data-shape-title="{{ $i }}">
                            <div class="hero__cellcontent">
                                <div class="hero__content">
                                    <div class="hero__imgwrapper">
                                        {!! image($img['id'], 'full', 'hero__img') !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
