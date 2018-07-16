<div class="nav flex">
  <a href="/" class="nav__logo">
    <img src="images/logo.svg" />
  </a>

  <nav class="nav__menu">
    <ul class="list-reset flex flex-no-wrap items-stretch content-center justify-around">
      <li><a href="brands">Brands</a></li>
      <li><a href="about">About</a></li>
      <li><a href="careers">Careers</a></li>
      <li><a href="contact">Contact</a></li>
    </ul>
  </nav>

  <ul class="nav__social list-reset flex flex-no-wrap items-stretch content-center">
    <li class="flex-1">
      <a href="{{ $page->facebookUrl }}" target="_blank">
        <img src="images/social/facebook.svg" alt="Facebook" />
      </a>
    </li>
    <li class="flex-1">
      <a href="{{ $page->twitterUrl }}" target="_blank">
        <img src="images/social/twitter.svg" alt="Twitter" />
      </a>
    </li>
    <li class="flex-1">
      <a href="{{ $page->instagramUrl }}" target="_blank">
        <img src="images/social/instagram.svg" alt="Instagram" />
      </a>
    </li>
    <li class="flex-1">
      <a href="{{ $page->linkedInUrl }}" target="_blank">
        <img src="images/social/linkedin.svg" alt="LinkedIn" />
      </a>
    </li>
  </ul>

</div>
