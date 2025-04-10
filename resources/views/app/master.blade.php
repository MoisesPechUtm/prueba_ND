<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
</head>
<body>

<div class="layout-wrapper layout-content-navbar">

      <div class="layout-container">
          <!-- Menu -->
            @include('app.menu')
          <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            <div class="content-wrapper">

              <!-- Content -->
              @yield('contenido')
              <!-- / Content -->

            </div>
          
        </div>
        
      </div>

      
</div>

<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/menu.js')}}"></script>
</body>
</html>