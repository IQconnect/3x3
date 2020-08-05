@extends('layouts.post')

  @section('news')
	@php
				$title = $post->post_title;
				$dayname = get_field('dayname');
				$day = get_field('day');
				$month = get_field('month');
				$year = get_field('year');
				$date = ("$dayname $day.$month.$year");
        @endphp

  @php $sections = get_field('components') @endphp

  <div class="aktualnosci__title">
    {!! $title !!} 			{!! $date !!}
    </div>

  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp
        @include('layouts.components.' . $sectionName, ['data'=>$section])

    @endforeach
  @endif

@endsection
