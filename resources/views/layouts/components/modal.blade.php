@php
$modal = $data['modal'];
@endphp

@foreach($modal as $item)
@php
  $img = $item['player']['image'];
  $name = $item['player']['name'];
  $nick = $item['player']['nick'];
  $number = $item['player']['number'];
  $position = $item['player']['position'];
  $club = $item['player']['club'];
  $wzrost = $item['player']['wzrost'];
  $best = $item['player']['best'];
  $rw = $item['player']['rw'];
  $pt2 = $item['player']['pt2'];
  $pt3 = $item['player']['pt3'];
  $zb = $item['player']['zb'];
  $pr = $item['player']['pr'];
  $as = $item['player']['as'];
  $bl = $item['player']['bl'];
@endphp

<section class="popup-flat" data-popup-flat="{{ $loop->index+1 }}">

	  <div class="modal">
			<i data-close-popup="{{ $loop->index+1 }}" class="fas fa-times modal__close"></i>

			<h2 class="modal__headline">
				{{ $name }}
			  </h2>
			  <span class="modal__title">
				{{ $nick }} #{{ $number }}
			  </span>
			  <div class="modal__grid">
				<div class="modal__avatar">
				  <img src="{{ $img['url'] }}" alt="{{ $img['title'] }}" />
				</div>
				<div class="modal__stats">
				  <table class="modal__table modal__table--stats">
					<tr>
					  <td>
						RW
					  </td>
					  <td class="modal__pt">
						{{ $rw }}
					  </td>
					</tr>
					<tr>
					  <td>
						2 PKT.
					  </td>
					  <td class="modal__pt">
						{{ $pt2 }}
					  </td>
					</tr>
					<tr>
					  <td>
						3 PKT.
					  </td>
					  <td class="modal__pt">
						{{ $pt3 }}
					  </td>
					</tr>
					<tr>
					  <td>
						ZB
					  </td>
					  <td class="modal__pt">
						{{ $zb }}
					  </td>
					</tr>
					<tr>
					  <td>
						PR
					  </td>
					  <td class="modal__pt">
						{{ $pr }}
					  </td>
					</tr>
					<tr>
					  <td>
						AS
					  </td>
					  <td class="modal__pt">
						{{ $as }}
					  </td>
					</tr>
					<tr>
					  <td>
						BL
					  </td>
					  <td class="modal__pt">
						{{ $bl }}
					  </td>
					</tr>
				  </table>
				</div>
			  </div>
			  <div class="modal__content">
				<table class="modal__table">
				  <tr>
					<td>
					  POZYCJA
					</td>
					<td>
					  {{ $position }}
					</td>
				  </tr>
				  <tr>
					<td>
					  WZROST
					</td>
					<td>
					  {{ $wzrost }}
					</td>
				  </tr>
				  @if($club)
				  <tr>
					<td>
					KLUB
					</td>
					<td>
					  {{ $club }}
					</td>
				  </tr>
				  @endif
				  <tr>
					<td>
					  OSIĄGNIĘCIE
					</td>
					<td>
					  {{ $best }}
					</td>
				  </tr>
				</table>
			  </div>
	</div>
</section>
@endforeach
