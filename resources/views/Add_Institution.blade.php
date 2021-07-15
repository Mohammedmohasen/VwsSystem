<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Institution</title>

  <!-- Adding Unicode support. -->
  <meta charset="utf-8">
  <meta name="Keywords" content="IUG, Voluntary, Volunteers, volunteering, IUG, voluntary IUG, Voluntary Department, Voluntary Department of IUG,
  التطوع,العمل التطوعي,العمل التطوعي في الجامعة الإسلامية,قسم العمل التطوعي,قسم العمل التطوعي في الجامعة الإسلامية">
    <meta name="description" content="The main page of volunteering management at IUG.">

  <!-- The following line is used for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

  <!-- JQuery (For Bootstrap)  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper.js (For Bootstrap)-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
 <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!--CSS File-->
<link rel="stylesheet" type="text/css" href="..\CSS\DOV_index.css">
     
</head>
<body>
    <!--Navbar 1-->
    <div class="d-flex justify-content-between" style="background-color: #252525;">
        <div class="pl-2 py-1" >
            <a href="#" data-toggle="tooltip" title="Messages"> <i class="fas fa-envelope n1"></i>
              <span class="badge badge-danger rounded-circle" style="position: relative; right: 16px; bottom: 10px;">3</span>
            </a>
        </div>
        <div class="pl-2 py-1" >
            <a href="#"></a><i class="fab fa-facebook-square n1 facebook"></i></a>
            <a href="#">  <i class="fab fa-twitter-square n1 twitter" ></i></a>
            <a href="#"> <i class="fab fa-youtube-square n1 youtube"></i></a>
            <a href="#"> <i class="fab fa-flickr n1 flicker" ></i>  </a>
            <a href="#"> <i class="fab fa-instagram n1 instagram"></i> </a>
        </div>
    
        <div class="pr-2 py-1" >
            <a href="#"data-toggle= "tooltip" title="Change to Arabic"> <i class="fas fa-language n1"></i></a>
            <a href="DOVHome.html" data-toggle="tooltip" title="Sign Out"><i class="fas fa-sign-out-alt n1"></i></a>
        </div>
      </div>
  
      <!--Navbar 2-->
  
      <nav class="navbar navbar-expand-lg  navbar-light bg-light  shadow-lg sticky-top" >
          <a class="navbar-brand" href="#">    <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:60px; " class="float-md-right img-fluid ">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
           @include('include.dovnavbaren')
          </div>
        </nav>

     <!--Page Title-->
     <div class="container-fluid title text-center ">
      <h1 class="p-4 display-4 title text-center m-0 p-0">Add Institution</h1>
  </div>
  <div class="container my-5">
      <h3 class="text-left" style=" color: #333333;"><i class="far fa-building" ></i>  
          Add a new institution </h3>
      <form action="#" class="validation" novalidate>
          <div class="form-group my-4">
              <label for="Institution_name" class="mt-4">Institution name<span class="text-danger">*</span>:</label>
              <input type="text" class="form-control" id="Institution_name" placeholder="Enter institution name..." name="Institution_name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
        <div class="form-group my-4">
          <label for="Institution_type" class="mt-4">Institution type<span class="text-danger">*</span>:</label>
          <input type="text" class="form-control" id="Institution_type" placeholder="Enter institution type..." name="Institution_type" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group my-4">
          <label for="Institution_type" class="mt-4">Governrate<span class="text-danger">*</span>:</label>
          <input type="text" class="form-control" id="Governrate" placeholder="Enter governrate name..." name="Governrate" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
  
        <div class="form-group my-4">
          <label for="Password" class="mt-4">Password<span class="text-danger">*</span>:</label>
          <input type="Password" class="form-control" id="Password" placeholder="Enter institution type..." name="Password" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group my-4">
          <label for="logo" class="mt-4">Upload logo<span class="text-danger">*</span>:</label>
          <input type="file" class="form-control-file" id="logo" name="logo" accept="image/png, image/jpeg, image/jpg" required >
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn1 my-4">Submit</button>
        </div>

      </form>
      <hr>
    </div>

    
    <!--Edit Modal-->
<div class="modal fade" id="editInstitution">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit An Institution</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
          <form action="#" class="validation" novalidate>
              <div class="form-group my-4">
                  <label for="Institution_name" class="mt-4">Institution name<span class="text-danger">*</span>:</label>
                  <input type="text" class="form-control" id="Institution_name" placeholder="Enter institution name..." name="Institution_name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            <div class="form-group my-4">
              <label for="Institution_type" class="mt-4">Institution type<span class="text-danger">*</span>:</label>
              <input type="text" class="form-control" id="Institution_type" placeholder="Enter institution type..." name="Institution_type" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group my-4">
              <label for="Institution_type" class="mt-4">Governrate<span class="text-danger">*</span>:</label>
              <input type="text" class="form-control" id="Governrate" placeholder="Enter governrate name..." name="Governrate" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
       
            <div class="form-group my-4">
              <label for="Password" class="mt-4">Password<span class="text-danger">*</span>:</label>
              <input type="Password" class="form-control" id="Password" placeholder="Enter institution type..." name="Password" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group my-4">
              <label for="logo" class="mt-4">Upload logo<span class="text-danger">*</span>:</label>
              <input type="file" class="form-control-file" id="logo" name="logo" accept="image/png, image/jpeg, image/jpg" required >
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
  
          </form>
             
          </div>
      
      <!-- Modal footer -->
      <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn btn1 m-1" data-dismiss="modal">Submit</button>
        </div>
      
    </div>
  </div>
</div>
         

<script>
  // Disable form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

   <!-- Footer -->

<div class="jumbotron text-center  rounded-0" style="margin-bottom:0;" id= "footer">
  <img src="{{ asset('CSS/IUG_logo') }}" alt="Logo" style="width:100px; height: 100px; "  class="img-fluid ">  
  <div>
     <a href="#" class="social" > <i class="fab fa-facebook-square facebook" style="user-select: auto;"></i></a>
     <a href="#" class="social" > <i class="fab fa-twitter-square twitter" ></i></a>
     <a href="#" class="social" >  <i class="fab fa-youtube-square youtube" ></i></a>
     <a href="#" class="social" ><i class="fab fa-flickr flicker" ></i></a>  
     <a href="#" class="social" ><i class="fab fa-instagram instagram" style="user-select: auto;"></i></a> 
    </div>
    <p id = "rights" style="color: white;">All rights reserved to the Islamic University of Gaza</p>
</div>


      <!--Tooltip Script-->

<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>