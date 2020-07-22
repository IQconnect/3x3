@php
 $title = $data['headline'];
 $color = $data['scolor'];
@endphp

<div class="headline ">
	<h1 class="headline__title @if($color=='white')headline--black @else headline--white @endif">
	{!! $title !!}
	</h1>
</div>
