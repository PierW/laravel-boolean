<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- MIO CSS -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    @include('header')
    @yield('content')
    @include('footer')
  </body>
</html>
