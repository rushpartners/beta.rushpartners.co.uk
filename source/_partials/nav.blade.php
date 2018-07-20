<div class="nav flex">
  <a href="/" class="nav__logo">
    <img src="images/logo.svg" />
  </a>



  <div class="w-full hidden sm:block flex-grow sm:flex sm:items-center justify-center nav__menu">
    <div class="list-reset flex flex-no-wrap items-center content-center justify-around">
      <div class="block mt-4 mx-10 sm:inline-block sm:mt-0  nav__item nav__item--dropdown">
        <a href="" dropdown>Brands</a>
        <div class="nav__dropdown">
          @include('_partials.brands')
        </div>
      </div>
      <a href="about" class="block mt-4 mx-10 sm:inline-block sm:mt-0 nav__item @if($page->getUrl() === '/about') nav__item--active @endif">About</a>
      <a href="careers" class="nblock mt-4 mx-10 sm:inline-block sm:mt-0 nav__item @if($page->getUrl() === '/careers') nav__item--active @endif">Careers</a>
      <a href="contact" class="block mt-4 sm:inline-block sm:mt-0 nav__item @if($page->getUrl() === '/contact') nav__item--active @endif">Contact</a>
    </div>
  </div>
  <div class="block sm:hidden  w-full">
    <button @click="toggle" class="flex float-right px-3 py-3 text-white">
      <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg"><path d="M3 9V6h30v3H3zm0 10v-3h30v3H3zm0 10v-3h30v3H3z" fill="#F6F6F6" fill-rule="nonzero"/></svg>
    </button>
  </div>


  <div class="nav__social md:float-right pr-10">
    @include('_partials.socials')
  </div>
</div>
