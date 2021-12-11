@extends('layout.app') <!-- import for or connection layout.app -->
@section('title','About')<!-- using section send About to layout.app-->
<!-- use to receive the layout.app body yeild  -->
@section('content') <!-- like same word.app bodyyield('content') for all page  -->
<div class="container-fluid py-2 text-center bg-dark"> 
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-white">About</h3>
        </div>
          
   </div>

</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.</p><br><br>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.</p><br><br>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.</p><br><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.</p><br><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia placeat sit neque aliquid error totam, odit dicta illum ad asperiores.</p>
        </div>
    </div>
</div>

@endsection