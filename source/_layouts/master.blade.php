<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ $page->baseUrl }}">
  <title>{{ $page->title }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable = no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="theme-color" content="#ce242c">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="stylesheet" href="assets/css/main.css">
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
