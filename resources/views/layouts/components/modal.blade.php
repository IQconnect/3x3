	@php
		$modal =  get_field('modal','option');
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
			<div class="modal__avatar">
				{!! image($img['id'], 'full', 'modal__img') !!}
			</div>
			<div class="modal__content">
				<div class="modal__headline">
					{{ $name }}
				</div>
				<div class="modal__title">
					{{ $nick }} #{{ $number }}
				</div>
				<div class="modal__tableinfo">
					<div class="modal__info">
						<p class="modal__text">
						POZYCJA
						</p>
						<div class="modal__text--input">
						{{ $position }}
						</div>
					</div>
					<div class="modal__info">
						<p class="modal__text">
						WZROST
						</p>
						<div class="modal__text--input">
							{{ $wzrost }}
						</div>
					</div>
					<div class="modal__info">
						<p class="modal__text">
							KLUB
						</p>
						<div class="modal__text--input">
							{!!$club !!}
						</div>
					</div>
					<div class="modal__info">
						<p class="modal__text">
							OSIĄGNIĘCIE
						</p>
						<div class="modal__text--input">
							{!! $best !!}
						</div>
					</div>
				</div>
			</div>
			<div class="modal__statistic">
				<div class="modal__caption">
					Statystki
				</div>

				<div class="modal__pool">
					<div class="modal__spec">
						<p class="modal__desc">
							RW
						</p>
						<div class="modal__pt">
							{{ $rw }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							2PKT.
						</p>
						<div class="modal__pt">
							{{ $pt2 }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							3PKT.
						</p>
						<div class="modal__pt">
							{{ $pt3 }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							ZB
						</p>
						<div class="modal__pt">
							{{ $zb }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							PR
						</p>
						<div class="modal__pt">
							{{ $pr }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							AS
						</p>
						<div class="modal__pt">
							{{ $as }}
						</div>
					</div>
					<div class="modal__spec">
						<p class="modal__desc">
							BL
						</p>
						<div class="modal__pt">
							{{ $bl }}
						</div>
					</div>
				</div>
	</div>
</div>
</section>
@endforeach
