<div class="nav flex">
  <a href="/" class="nav__logo">
    <img src="images/logo.svg" />
  </a>

  <nav class="w-full flex-grow sm:w-auto nav__menu">
    <ul class="list-reset flex flex-no-wrap items-center content-center justify-around">
      <li class="nav__item nav__item--dropdown">
        <a href="" dropdown>Brands</a>
        <div class="nav__dropdown">
          @include('_partials.brands')
        </div>
      </li>
      <li class="nav__item @if($page->getUrl() === '/about') nav__item--active @endif">
        <a href="about">About</a>
      </li>
      <li class="nav__item @if($page->getUrl() === '/careers') nav__item--active @endif">
        <a href="careers">Careers</a>
      </li>
      <li class="nav__item @if($page->getUrl() === '/contact') nav__item--active @endif">
        <a href="contact">Contact</a>
      </li>
    </ul>
  </nav>

  <div class="nav__social md:float-right pr-10">
    @include('_partials.socials')
  </div>
</div>
