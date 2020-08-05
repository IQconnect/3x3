@php
      $fb = get_field('facebook','option');
      $inst = get_field('instagram','option');
@endphp


<header class="header header--noabsolute header--hide" data-header>
  <div class="container">
    <div class="header__wrapper">
      <a class="header__brand-wrapper" href="{{ home_url('/') }}">
        <img class="header__brand" src="{{  get_field('logo', 'options')['url'] }}" alt="3X3">
      </a>
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
        <div class="header__wrapmenu">
          <div class="lg-pick">
            @if ($fb)
            <a class="lg-pick__wrapper text" href="{!! $fb !!}">
                <i class="fab fa-facebook-f"></i>
            </a>
            @endif
            @if ($inst)
            <a class="lg-pick__wrapper text" href="{!! $inst!!}">
                <i class="fab fa-instagram"></i>
            </a>
            @endif
        </div>
            <nav class="header__nav" data-menu>
              @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']) !!}
              @endif
            </nav>
      </div>
    </div>
  </div>
</header>
