@php
    $shortcode = $data['shortcode'];
    $tooltips = $data['tooltips'];
    $logo = option('heroimage');
@endphp


<section class="hero fullscroll">
    <div class="hero__selection">
    {!! do_shortcode( "[".$shortcode."]" ); !!}
    </div>
    <div class="hero__logo">
        {!! image($logo['id'], 'full', 'hero__image') !!}
    </div>
</section>
