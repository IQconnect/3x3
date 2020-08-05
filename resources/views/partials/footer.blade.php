@php
  $info = option('info');
  $brandlogo = option('brand')['url'];
  $iqlogo = option('iqlogo')['url'];
  $right = option('copyright');
  $title = option('titlefooter');
  $color = option('fcolor');
  $follow = option('followtext');
  $fb = get_field('facebook','option');
  $inst = get_field('instagram','option');
@endphp

<footer class="footer @if($color=='white')footer--white @else footer--black @endif fullscroll">
  <div class="container">
    <div class="headline ">
      <h1 class="headline__title @if($color=='white')headline--black @else headline--white @endif">
      {!! $title !!}
      </h1>
    </div>
    <div class="footer__wrapper">
      <a class="footer__brand" href="#">
        <img class="footer__image" src="{{ $brandlogo }}" alt="{{ option('brand')['alt'] }}">
      </a>
      <div class="footer__text">
      {!! $info !!}
      </div>
      <div class="footer__follow">
        {!! $follow !!}
      </div>
      <div class="lg-pick footer__social">
        @if ($fb)
        <a class="lg-pick__wrapper footer__icon" href="{!! $fb !!}">
            <i class="fab fa-facebook-f"></i>
        </a>
        @endif
        @if ($inst)
        <a class="lg-pick__wrapper footer__icon" href="{!! $inst!!}">
            <i class="fab fa-instagram"></i>
        </a>
        @endif
    </div>
      <a class="footer__logo" href="http://iqconnect.pl">
        <img class="footer__image" src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
      </a>
      <div class="footer__right">
          {!!  $right !!}
        </div>
    </div>

    </div>
</footer>
