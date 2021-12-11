@extends('layout.app')
@section('title','Home')

@section('content') <!-- like same word.app bodyyield('content') for all page  -->
<div class="container-fluid bodylogo  mb-0"> <!--container-fluid all jayagga dokol kore -->
    <div class="row d-flex justify-content-center overlay"><!--crnter kore align right rakte-->
   <div class="col-md-4 heaader1">
          <h1 class="text-white pt-2">WEB DEVELOPER</h1>
          <h6 class="text-white pt-1">Software Engineer</h6>
          <button class="btn btn-primary mt-1"> Learn More</button>
   </div>

    </div>
</div>

<div class="container py-4 text-center"> 
    <div class="row">
   <div class="col-md-12">
         <h3 class="mt-3 mb-2"> My Recent Project </h3>    
   </div>

    </div>
    <div class="row mt-5">
    <div class="col-md-4 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
<div class="col-md-4 mt-2 mb-3">
    <div class="card" style="width: 100%;">
  <img src="{{asset('images/2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Service Name</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
<div class="col-md-4 mt-2 mb-3">
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
<div class="container py-4 "> 
    <div class="row">
        <div class="col-md-12">
        <h3 class="mb-4 text-center"> My Contact </h3>  
        </div>
    
   </div>
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
 <div class="col-md-6 text-center mt-4 ">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58113.69849184146!2d88.6197560088243!3d24.447102017995235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbf20bc9feeae9%3A0x98b1db6c28ac06f7!2sPaba!5e0!3m2!1sen!2sbd!4v1639254873110!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
    
   </div>

</div>

@endsection