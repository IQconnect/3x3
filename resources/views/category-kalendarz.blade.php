@extends('layouts.posted')

@section('news')

@php

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array('post_type' => 'post', 'posts_per_page'=>6, 'cat'=>4, 'paged'=>$paged);
    $work = new WP_Query($args);


@endphp

<section class="section section--post post_calendar section--black">
	<div class="container">
		<h1 class="headline__title @if($color=='white')headline--black @else headline--white @endif">
			Kalendarz
			</h1>
		<div class="post_calendar__wrapper" >
			@if($work)
			@foreach($work->posts as $post)

				@php
				$id = $post-> ID;
				$desc = $post->post_excerpt;
				$title = $post->post_title;
				$dayname = get_field('dayname', $id);
				$day = get_field('day', $id);
				$month = get_field('month', $id);
				$year = get_field('year', $id);
				$date = get_the_date('Y-m-d',$id);
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
				<a class="post_calendar__postcontent" href="{!! $link !!}">
					@if($thumbnail)
					<div class="post_calendar__postimage">
					{!! image($thumbnail, 'full', ' post_calendar__image') !!}
					</div>
					@endif
					<div class="post_calendar__content">
						<div class="post_calendar__title">
						{!! $title !!}
						</div>
						@if($date)
						<div class="post_calendar__date">
							{!! $date !!}
							</div>
						@endif
					</div>
				</a>
				@endforeach
			@endif
		</div>
		<div class="post_calendar__pagination">
		@php
    $args = array(
        'query' => $work,
    );
    boot_pagination( $args );
@endphp
		</div>
	</div>
</section>

@endsection
