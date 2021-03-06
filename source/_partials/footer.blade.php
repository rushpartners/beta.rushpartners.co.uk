<footer class="footer mt-12 lg:mt-20">
  <div class="container mx-auto">
    <img src="images/logo.svg" class="footer__logo  mb-0 sm:mb-10 pl-10 md:float-left">

    <div class="footer__social md:float-right pr-10">
      @include('_partials.socials')
    </div>

    <div class="clear ">
      <ul class="footer__sites md:float-right pr-10 pb-5">
        @foreach ($page->sites as $site)
        <li class="md:float-left"><a class="p-4 hoverlink" href="{{ $site->url }}" target="_blank">{{ $site->name }}</a></li>
        @endforeach
      </ul>

      <ul class="footer__nav md:float-left pl-10 pb-5">
        <li class="md:float-left"><a class="p-4 hoverlink" href="about">About us</a></li>
        <li class="md:float-left"><a class="p-4 hoverlink" href="careers">Careers</a></li>
        <li class="md:float-left"><a class="p-4 hoverlink" href="contact">Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="footer__legal clear">
    <div class="container mx-auto py-5 clearfix pl-10 pr-10">
      <div class="md:float-left">
        Copyright &copy; 2018 <strong class="text-white">Rush Partners Ltd.</strong> All rights reserved.
      </div>

      <div class="md:float-right">
        <a href="privacy">Privacy Policy</a>
        <a href="terms" class="footer__text-white">Terms and Conditions</a>
      </div>
    </div>
  </div>
</footer>
