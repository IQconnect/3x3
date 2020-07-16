@php
    $content = option("contact-header");
    $shortcode = $data['shortcode'];
    $tooltips = $data['tooltips'];
    $title = option("upper");
    $eventurl = option("eventurl");
    $eventtext = option("eventtext");
@endphp


<section class="hero fullscroll">
    {!! do_shortcode( "[".$shortcode."]" ); !!}
</section>
