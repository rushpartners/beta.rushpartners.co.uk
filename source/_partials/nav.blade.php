<div class="nav flex">
  <a href="/" class="nav__logo">
    <img src="images/logo.svg" />
  </a>

    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto nav__menu">
      <div class="text-sm sm:flex-grow content-center ">
        <a href="brands" class="no-underline block mt-4 mx-10 sm:inline-block sm:mt-0">Brands</a>
        <a href="about" class="no-underline block mt-4 mx-10 sm:inline-block sm:mt-0">About</a>
        <a href="careers" class="no-underline block mt-4 mx-10 sm:inline-block sm:mt-0">Careers</a>
        <a href="contact" class="no-underline block mt-4 sm:inline-block sm:mt-0">Contact</a>
      </div>
    </div>
    <div class="block sm:hidden  float-left">
      <button @click="toggle" class="flex items-center px-3 py-2 text-white">
<svg width="35" height="35" xmlns="http://www.w3.org/2000/svg"><path d="M3 9V6h30v3H3zm0 10v-3h30v3H3zm0 10v-3h30v3H3z" fill="#F6F6F6" fill-rule="nonzero"/></svg>
      </button>
    </div>

  </nav>

  <div class="nav__social md:float-right pr-10">
    @include('_partials.socials')
  </div>
</div>
