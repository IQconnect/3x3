
@php
$sectiontitle = $data['headline'];
$color = $data['scolor'];
$sponsors= $data['sinfo']
@endphp

<section class="section @if($color=='white')section--white @else section--black @endif sponsor fullscroll">
	<div class="container">
		@include('blocks.headline')
		<div class="sponsor__wrapper" >

			<div class="sponsor__carousel sponsor-carousel">
				@foreach ($sponsors as $element)
				@php
				$img = $element['sponsorimg'];
				$stext = $element['sponsortext'];
				$stitle = $element['sponsortitle'];
				$slink = $element['sponsorlink'];
				@endphp
						<div class="sponsor__cell">
							<div class="sponsor__cellcontent">
							<a class="sponsor__imgwrapper" href="{!! $link !!}">{!! image($img['id'], 'full', 'sponsor__img') !!}</a>
								<div class="sponsor__title">
									{!! $stitle !!}
								</div>
								<div class="sponsor__text">
									{!! $stext !!}
								</div>
								<a href="{!! $link !!}"> {!! $buttontext !!} </a>
							</div>
						</div>
				@endforeach
		</div>
	</div>
</section>
