<div class="nav flex w-full absolute sm:absolute md:static">
  <a href="/" class="nav__logo">
    <img src="images/logo.svg" />
  </a>

  <div class="w-full visible sm:hidden md:visible flex sm:block flex-grow sm:flex sm:items-center justify-center nav__menu">
    <div class="list-reset flex flex-no-wrap items-center content-center justify-around menu-container">
      <div class="block mt-4 mx-10 sm:inline-block md:mt-0  nav__item nav__item--dropdown">
        <a href="" dropdown>Brands</a>
        <div class="nav__dropdown">
          @include('_partials.brands')
        </div>
      </div>
      <a href="about" class="block mt-4 mb-4 mx-10 md:mb-0 sm:inline-block md:mt-0 nav__item @if($page->getUrl() === '/about') nav__item--active @endif">About</a>
      <a href="careers" class="nblock mt-4 mb-4 mx-10 md:mb-0 sm:inline-block md:mt-0 nav__item @if($page->getUrl() === '/careers') nav__item--active @endif">Careers</a>
      <a href="contact" class="block mt-4 mb-4 md:mb-0  sm:inline-block md:mt-0 nav__item @if($page->getUrl() === '/contact') nav__item--active @endif">Contact</a>
    </div>
  </div>


  <div class="hamburger-container visible sm:visible md:hidden flex float-right absolute pin-t pin-r pr-8 pt-8">
      <div class="hamburger hamburger--spin">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
  </div>


  <div class="nav__social md:float-right pr-10">
    @include('_partials.socials')
  </div>
</div>
