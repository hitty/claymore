<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar__brand" href="#">
      @php
      echo get_custom_logo();
      @endphp
      <img src="@asset('images/logo.png')" alt="Claymore" class="navbar__brand__image">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto text-start" id="navbarSupportedContent">

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
        'container'            => 'div',
        'container_class'      => ' ms-auto mb-2 mb-lg-0',
        'menu_class'           => 'nav',
        'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
        'item_spacing'         => 'preserve',

          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav'
          ]) !!}
      @endif

      <!--ul class="nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav__item">
          <a class="nav__link nav__link--active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#">About</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#">Service</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#">Features</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#">Price</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#">Contact</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#"><b>Login</b></a>
        </li>
      </ul-->
    </div>
  </div>
</nav>
