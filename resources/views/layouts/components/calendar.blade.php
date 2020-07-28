
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
				$id = $post-> ID;
				$title = $post->post_excerpt;
				$day = get_field('day', $id);
				$month = get_field('month', $id);
				$dayname = get_field('dayname', $id);
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
					<div class="calendar__cell">
						<div class="calendar__cellcontent">
							<div class="calendar__content">
								<div class="calendar__date">
									<div class="calendar__datename">
										{!! $dayname !!}
									</div>
									<div class="calendar__datenumber">
									{!! $day !!}.{!! $month !!}
									</div>
								</div>
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
