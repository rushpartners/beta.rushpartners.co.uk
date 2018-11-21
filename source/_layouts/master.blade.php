<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ $page->baseUrl }}">
  <title>{{ $page->title }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable = no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="On a mission to disrupt on the sports betting industry by making the fans always the heart of our business and changing the gambling business for good using the best technologies.">
  <meta name="keywords" content="sports, betting, technology, disruption, uk, business">
  <meta name="author" content="Rush Partners Ltd.">
  <meta name="theme-color" content="#EF6C5D">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="assets/css/main.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  @if($page->analyticsTrackingCode)
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->analyticsTrackingCode }}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', '{{ $page->analyticsTrackingCode }}');
  </script>
  @endif
</head>
<body>
  @yield('header')
  @yield('body')
  @include('_partials/footer')
  <script src="assets/js/main.js"></script>
</body>
</html>
