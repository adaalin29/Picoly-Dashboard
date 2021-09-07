<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <base href="{{ URL::to('/') }}" />
  <title>{{config('app.name')}}</title>
  <meta charset="utf-8" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('keywords')" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#E32340">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#E32340">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#E32340">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- responsive use only -->
  <link href="css/style.css?34" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css?34" rel="stylesheet" type="text/css" />
  @stack('styles')
</head>
<body>
  
  @yield('content')
  
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/moment.js" type="text/javascript"></script>
  <script src="js/easytimer.js" type="text/javascript"></script>
<!--   <script src="https://cdn.jsdelivr.net/npm/pusher-js@5.0.3/dist/web/pusher.min.js"></script>  -->
    <script src="js/pusher.min.js"></script> 
   <script>
    $(document).ready(function(){
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
    });
  </script>
  @stack('scripts')
</body>
</html>