@extends('layouts.post')

  @section('news')

  @php $sections = get_field('components') @endphp
asdasdasd
  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp
        @include('layouts.components.' . $sectionName, ['data'=>$section])
    @endforeach
  @endif

@endsection
