<!DOCTYPE html>
<html lang="en">
<head>
   <title>@yield('title')</title> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">     
</head>
<body>
  @include('layout.Menu')

 @yield('content')

  
  @include('layout.Footeer')
<script type ="#" src="{{asset('js/jquery.slim.min.js')}}"></script>
<script type ="#" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type ="#" src="{{asset(' js/popper.min.js')}}"></script>
<script type ="#" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type ="#" src="{{asset('js/custom.js')}}"></script>
</body>
</html>