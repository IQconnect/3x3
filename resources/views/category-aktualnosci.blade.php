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
		<div class="aktualnosci__wrapper" >
				@foreach ($posts as $post)
				@php
				$title = $post->post_excerpt;
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
						<div class="aktualnosci__cellcontent">
							{!! image($thumbnail, 'full', 'news__image') !!}
							<div class="aktualnosci__content">

									<a class="aktualnosci__text" href="{!! $link !!}">{!! $title !!}</a>
						</div>
					</div>
				@endforeach
	</div>
</section>

@endsection
