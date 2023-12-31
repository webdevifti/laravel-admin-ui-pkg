<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/admindash/admin/dist/images/logos/favicon.png') }}">
    <link  id="themeColors"  rel="stylesheet" href="{{ asset('vendor/admindash/admin/dist/css/style.min.css') }}" />
  </head>
  <body>
    @yield('content')

</body>
</html>