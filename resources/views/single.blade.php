@extends('layouts.posted')

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
  <div class="posts">
    <div class="container container--slim">
      @if($title)
        <div class="posts__title">
          {!! $title !!}
        </div>
        @endif
      @if($date)
        <div class="posts__date">
          {!! $date !!}
        </div>
      @endif
    </div>
    @if($sections)
      @foreach ($sections as $section)
        @php ($sectionName = $section['acf_fc_layout']) @endphp
        @include('layouts.components.' . $sectionName, ['data'=>$section])
      @endforeach
    @endif
  </div>
@endsection
