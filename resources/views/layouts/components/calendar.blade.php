
@php
$sectiontitle = $data['headline'];
$background = $data['backcal']['ID'];
$color = $data['scolor'];
@endphp

<section  class="section @if($color=='white')section--white @else section--black @endif calendar fullscroll">
	<div class="container">
		<div class="calendar__background">
		{!! image($background, 'full', 'calendar__img') !!}
		</div>
		<div class="calendar__wrapper" >
			@include('blocks.headline')
			<div class="calendar__contain">
				<div class="calendar__carousel calendar-carousel">
					@foreach (calendar() as $post)
						@php
						$id = $post-> ID;
						$title = $post->post_title;
						$excerpt = $post->post_excerpt;
						$date = get_the_date('Y-m-d',$id);

						$dayname = get_the_date('F',$id);
						$link = get_post_permalink($post->ID);
						$thumbnail = get_post_thumbnail_id($post->ID);
						@endphp

						<div class="calendar__cell">
							<a href="{{ $link }}" class="calendar__cellcontent">
								<div class="calendar__content">
									<div class="calendar__date">
										<div class="calendar__datename">
											{!! $dayname !!}
										</div>
										<div class="calendar__datenumber">
										{!! $date !!}
										</div>
									</div>
									<div class="calendar__imgwrapper">
										{!! image($thumbnail, 'full', 'calendar__img') !!}
									</div>
										<p class="calendar__text" >{!! $title !!}</p>
								</div>
							</a>
						</div>
					@endforeach
				</div>
		@include('blocks.more')
	</div>
		</div>
	</div>
</section>
