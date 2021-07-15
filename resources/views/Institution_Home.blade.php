<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>

  <!-- Adding Unicode support. -->
  <meta charset="utf-8">
  <meta name="Keywords" content="Student page,IUG, Voluntary, Volunteers, volunteering, IUG, voluntary IUG, Voluntary Department, Voluntary Department of IUG,
  التطوع,العمل التطوعي,العمل التطوعي في الجامعة الإسلامية,قسم العمل التطوعي,قسم العمل التطوعي في الجامعة الإسلامية,البريد">
    <meta name="description" content="Student's main page for voluntary work of Islamic University of Gaza. ">

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
<link rel="stylesheet" type="text/css" href="..\CSS\Institution_index.css">
</head>
<body>
        <!--Navbar 1-->
        <div class="d-flex justify-content-between" style="background-color: #252525;">
            <div class="pl-2 py-1" >
                <a href="#" data-toggle="tooltip" title="Messages"> <i class="fas fa-envelope n1"></i>
                  <span class="badge badge-danger rounded-circle" style="position: relative; right: 16px; bottom: 10px;">3</span></a>
                  <a href="#" data-toggle="popover" title="Student Name" data-content="ID: XXXXXXXXX"> <i class="fas fa-user-alt n1"></i></a>
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
                <a href="#" data-toggle="tooltip" title="Sign Out"><i class="fas fa-sign-out-alt n1"></i></a>
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
            @include('include.instuationnavbaren')
              </div>
            </nav>

               <!--Page Title-->
               <div class="container-fluid title text-center ">
                <h1 class="p-4 display-4 title text-center m-0 p-0">Home</h1>
            </div>

             <!-- News-->
             <div class="container" style="margin-top: 100px; margin-bottom: 100px;">

              <div class="  d-flex justify-content-between learnTitle">
                <h5 class="mb-1">News</h5>
                <a href="Details.html" class="btn btn1 mb-1" >More</a>
                </div>
           <div class="row mt-3 ">
            <div class="col-sm-3 news">
                <div class="card ">
                    <img class="card-img-top" src="{{ asset('CSS/v.jpg')}}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Some text goes here, Some text goes here,Some text goes here</p>
                      <a href="#" class="btn btn1">Continue</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3 news">
                <div class="card " >
                    <img class="card-img-top" src="{{ asset('CSS/v.jpg')}}" alt="Card image" >
                    <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Some text goes here, Some text goes here, Some text goes here</p>
                      <a href="Details.html" class="btn btn1">Continue</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3 news">
                <div class="card "  >
                    <img class="card-img-top" src="{{ asset('CSS/v.jpg')}}" alt="Card image" >
                    <div class="card-body">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Some text goes here, Some text goes here, Some text goes here</p>
                      <a href="Details.html" class="btn btn1">Continue</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3 news">
              <div class="card "  >
                  <img class="card-img-top" src="{{ asset('CSS/v.jpg')}}" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Some text goes here, Some text goes here, Some text goes here</p>
                    <a href="Details.html" class="btn btn1">Continue</a>
                  </div>
                </div>
          </div>
           </div>

            </div>

            <!--Request Volunteers-->


            <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
              <div class="  d-flex justify-content-between learnTitle">
                <h5 class="mb-1">Request Volunteers</h5>
                <p></p>
                </div>
                <div class="d-flex justify-content-center mt-5">


                <div>
                <a href="#" class="btn btn1" data-toggle="modal" data-target="#requestVolunteers">Here</a>
                </div>

          </div>
          <hr class="my-5">
          </div>



            <!--Statstics-->
        <div class="container-fluid" id="Instructions" style="margin-top: 100px; ">


          <div class="row text-center" >
              <div class="Item m-5 col" style="color:#018756">
                <i class="fas fa-male icon1"></i>
              <p  class="numbers">0</p>
              <p class = "labels">Volunteers</p>
          </div>

              <div class="Item m-5 col" style="color:#E2E82B">
                  <i class="fas fa-fist-raised" ></i>
                  <p  class="numbers">0</p>
                   <p class = "labels" >Initiatives</p>
              </div>



            <div class="Item m-5 col" style="color: #EE6326;">
              <i class="fas fa-running"></i>
              <p  class="numbers">0</p>
              <p class = "labels" >Active initiatives</p>
            </div>


            <div class="Item m-5 col" style="color: #F40909;">
                <i class="far fa-building" ></i>
                    <p  class="numbers">0</p>
              <p class = "labels">Institutions</p>
          </div>
          </div>
        </div>

        <!--Institution Info-->

        <div class="container my-5">
          <h3 style="color:#EE6225;" class="mb-3">Institution Info</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem,
            mollitia quibusdam! Fugiat est magni ut porro excepturi assumenda reprehenderit enim!
            Consectetur ducimus amet omnis blanditiis consequuntur ipsam dolorum, voluptatem enim!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem,
              mollitia quibusdam! Fugiat est magni ut porro excepturi assumenda reprehenderit enim!
              Consectetur ducimus amet omnis blanditiis consequuntur ipsam dolorum, voluptatem enim!</p>
              <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:200px; " class=" img-fluid mx-5 ">
                <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:200px; " class="img-fluid mx-5 ">
              </div>

              <hr class="my-5">
        </div>










                         <!-- Footer -->

        <div class="jumbotron text-center  rounded-0" style="margin-bottom:0;" id= "footer">
          <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:100px; height: 100px; "  class="img-fluid ">
          <div>
             <a href="#" class="social" > <i class="fab fa-facebook-square facebook" style="user-select: auto;"></i></a>
             <a href="#" class="social" > <i class="fab fa-twitter-square twitter" ></i></a>
             <a href="#" class="social" >  <i class="fab fa-youtube-square youtube" ></i></a>
             <a href="#" class="social" ><i class="fab fa-flickr flicker" ></i></a>
             <a href="#" class="social" ><i class="fab fa-instagram instagram" style="user-select: auto;"></i></a>
            </div>
            <p id = "rights" style="color: white;">All rights reserved to the Islamic University of Gaza</p>
      </div>
      <!--Edit Modal-->
    <div class="modal fade" id="requestVolunteers">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Request Volunteers</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
              <form action="#" class="validation" novalidate>
                  <div class="form-group my-4">
                  <div class="form-group my-4">
                    <label for="reqVolunteers" class="mt-4">Request The Number of Volunteers<span class="text-danger">*</span>:</label>
                    <input type="number" class="form-control" id="reqVolunteers" name="reqVolunteers" class="form-control" required>
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



      <!--Popover-->

      <script>
        $(document).ready(function(){
          $('[data-toggle="popover"]').popover();
        });
        </script>

         <!--Tooltip Script-->

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
      </script>


</body>
</html>



