@php
  $contact = option('contact-contact');
  $info = option('info');
  $brand = option('iqlogo')['url'];
  $right = option('right');
  $right = option('copyright');
@endphp

<footer class="footer fullscroll">
  <div class="container">
    <div class="footer__contact">
      <a class="footer__brand" href="#">
        <img class="footer__image"src="{{ $brand }}" alt="{{ option('brand')['alt'] }}">
      </a>
      <div class="footer__text">
      {!!  $contact !!}
      </div>
    </div>
    <div class="footer__other">
      <div class="footer__right">
      {!!  $right !!}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img class="footer__image" src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
        </a>
      </div>
      <div class="footer__copyright">
        {!! option("copyright") !!}
    </div>
  </div>
</div>
</footer>
