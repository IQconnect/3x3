
@php
$sectiontitle = $data['headline'];
$color = $data['scolor'];
$sponsors= $data['sinfo'];
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
				$buttontext = $element['sponsorbutton']
				@endphp
						<div class="sponsor__cell">
							<div class="sponsor__cellcontent">
								@if($img)
							<div class="sponsor__imgwrapper">
								{!! image($img['id'], 'full', 'sponsor__img') !!}
							</div>
							@endif
								<div class="sponsor__title">
									{!! $stitle !!}
								</div>
								@if( $stext )
								<div class="sponsor__text">
									{!! $stext !!}
								</div>
								@endif
								@if( $slink )
								<a class="sponsor__button" href="{!! $slink['url'] !!}"> {!! $buttontext !!} </a>
								@endif
							</div>
						</div>
				@endforeach
		</div>
	</div>
</section>
