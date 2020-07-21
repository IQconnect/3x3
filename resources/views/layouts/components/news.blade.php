
@php
$sectiontitle = $data['headline'];
@endphp

<section class="section section--black news fullscroll">
	<div class="container">
		@include('blocks.headline')
		<div class="news__wrapper" >

			<div class="news__carousel news-carousel">
				@foreach (blog() as $post)
				@php
				$title = $post->post_excerpt;
				$link = get_post_permalink($post->ID);
				$thumbnail = get_post_thumbnail_id($post->ID);
				@endphp
					<div class="news__cell">
						<div class="news__cellcontent">
							{!! image($thumbnail, 'full', 'news__image') !!}
							<div class="news__content">

									<a class="news__text" href="{!! $link !!}">{!! $title !!}</a>
						</div>
					</div>
					</div>
				@endforeach
		</div>
			<div class="news__more">
				<a class="news__text" href="{!! $mainlink !!}">
					Czytaj więcej
				</a>
			</div>
	</div>
</section>
