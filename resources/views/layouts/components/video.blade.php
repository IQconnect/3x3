@php
	$shortcode = $data['shortcode'];
	$sectiontitle = $data['headline'];
	$color = $data['scolor'];
@endphp


<section class="video @if($color=='white')section--white @else section--black @endif">
	<div class="container">
	@include('blocks.headline')
    <div class="video__wrapper">


    {!! do_shortcode( "[".$shortcode."]" ); !!}
	</div>
</div>
</section>
