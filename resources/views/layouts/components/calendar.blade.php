
@php
$sectiontitle = $data['headline'];
$color = $data['scolor'];
@endphp

<section class="section @if($color=='white')section--white @else section--black @endif news fullscroll">
	<div class="container">
		@include('blocks.headline')
		<div class="calendar__wrapper" >
			<div class="calendar__contain">
			<div class="calendar__carousel calendar-carousel">
				@foreach (calendar() as $post)
				@php
				$title = $post->post_excerpt;
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
					<div class="calendar__cell">
						<div class="calendar__cellcontent">
							<div class="calendar__content">

									<a class="calendar__text" href="{!! $link !!}">{!! $title !!}</a>
						</div>
					</div>
					</div>
				@endforeach
		</div>
	</div>
		@include('blocks.more')

	</div>
</section>
