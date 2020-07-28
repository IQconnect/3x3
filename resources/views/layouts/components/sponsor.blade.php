
@php
$sectiontitle = $data['headline'];
$color = $data['scolor'];
@endphp

<section class="section @if($color=='white')section--white @else section--black @endif sponsor fullscroll">
	<div class="container">
		@include('blocks.headline')
		<div class="sponsor__wrapper" >

			<div class="sponsor__carousel sponsor-carousel">
				@foreach (blog() as $post)
				@php
				$title = $post->post_excerpt;
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
					<div class="sponsor__cell">
						<div class="sponsor__cellcontent">
							{!! image($thumbnail, 'full', 'sponsor__image') !!}
							<div class="sponsor__content">

									<a class="sponsor__text" href="{!! $link !!}">{!! $title !!}</a>
						</div>
					</div>
					</div>
				@endforeach
		</div>
		@include('blocks.more')
	</div>
</section>
