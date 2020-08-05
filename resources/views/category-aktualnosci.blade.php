@extends('layouts.post')

@section('news')

@php
    $posts = get_posts(array(
        'orderby'   => 'date',
        'sort_order' => 'asc',
        'post_type'  => 'post',
        'category'   => 3,
    ));

@endphp

<section class="section  aktualnosci section--black">
	<div class="container">
		<h1 class="headline__title @if($color=='white')headline--black @else headline--white @endif">
			Aktualności
			</h1>
		<div class="aktualnosci__wrapper" >
			@foreach ($posts as $post)
				@php
				$id = $post-> ID;
				$desc = $post->post_excerpt;
				$title = $post->post_title;
				$dayname = get_field('dayname', $id);
				$day = get_field('day', $id);
				$month = get_field('month', $id);
				$year = get_field('year', $id);
				$date = ("$dayname $day.$month.$year");
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
				<a class="aktualnosci__postcontent" href="{!! $link !!}">
					@if($thumbnail)
					<div class="aktualnosci__postimage">
					{!! image($thumbnail, 'full', ' aktualnosci__image') !!}
					</div>
					@endif
					<div class="aktualnosci__content">
						<div class="aktualnosci__title">
						{!! $title !!}
						</div>
						@if($day)
						<div class="aktualnosci__date">
							{!! $date !!}
							</div>
						@endif
						<div class="aktualnosci__text">
						{!! $desc !!}
						</div>
					</div>
				</a>
			@endforeach
		</div>
	</div>
</section>

@endsection
