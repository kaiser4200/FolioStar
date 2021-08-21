<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontEnd_template.all_css')
    <title>@yield('title')</title>
  </head>
  <body>

    @include('frontEnd_template.cover')
    @include('frontEnd_template.navbar')
    
    
    <div class="container">    
      <div class="row">  
        <div class="col-sm-3">
          @include('frontEnd_template.profile')
        </div>
        <div class="col-sm-9">

          <!-- Content  -->
          @yield('content')
          <!-- / Content  -->

        </div>      
      </div>
    </div>

    <div class="extra-bottom-margin"></div>
   
    @include('frontEnd_template.navlink')

    @include('frontEnd_template.all_scripts') 

    </body>
</html>