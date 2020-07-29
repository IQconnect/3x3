
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
				@endphp
						<div class="sponsor__cell">
							<div class="sponsor__cellcontent">
								{!! image($img['id'], 'full', 'sponsor__img') !!}

								<div class="sponsor__text">
									{{ $stext }}
								</div>
								<a href="{!! $link !!}"> {!! $buttontext !!} </a>
							</div>
						</div>
				@endforeach
		</div>
	</div>
</section>
