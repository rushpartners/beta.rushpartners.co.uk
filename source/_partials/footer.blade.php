<footer class="footer">
  <img src="images/logo.svg" class="md:float-left">

  <ul class="footer__nav">
    <li><a href="about">About us</a></li>
    <li><a href="careers">Careers</a></li>
    <li><a href="contact">Contact</a></li>
  </ul>

  <div class="float-right">
    @include('_partials.socials')
  </div>

  <ul class="footer__sites">
    @foreach ($page->sites as $site)
    <li><a href="{{ $site->url }}" target="_blank">{{ $site->name }}</a></li>
    @endforeach
  </ul>

  <div class="footer__legal">
    <div class="md:float-left">Copyright &copy; 2018 Rush Partners Ltd. All rights reserved.</div>

    <div class="md:float-right">
      <a href="privacy">Privacy Policy</a>
      <a href="terms">Terms and Conditions</a>
    </div>
  </div>
</footer>
