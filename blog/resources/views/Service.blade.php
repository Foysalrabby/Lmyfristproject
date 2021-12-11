@extends('layout.app')
@section('title','Service')
@section('content') <!-- like same word.app bodyyield('content') for all page  -->
<div class="container-fluid py-2 text-center bg-dark"> 
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-white">Service</h3>
        </div>
          
   </div>

</div>
<div class="container">
    <div class="row">
    <div class="col-md-3 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
<div class="col-md-3 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>  
<div class="col-md-3 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>  <div class="col-md-3 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-md-6 mb-3">
    <form>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-check-label" for="exampleCheck1">Message</label>
    <input type="textarea" class="form-control" id="exampleCheck1">
  </div>
  <button type="submit" class="btn  btn-primary">Send Now</button>
</form>
    </div>
    <div class="col-md-6 mt-2">
        <p> Name: Md Foysal Hossen Rabby</p>
        <p>Phone :01744341474 </p>
        <p>Email:rabbi443418@gmail.com</p>
        <p>Address: Rajshahi,Dhaka </p>
    </div>
</div>

</div>

@endsection