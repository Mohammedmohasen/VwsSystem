<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>

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
<link rel="stylesheet" type="text/css" href="{{ asset('CSS\student_index.css') }}">



   </style>
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
                @include('include.stdnavbaren')
              </div>
            </nav>

               <!--Page Title-->
           <div class="container-fluid title text-center ">
            <h1 class="p-4 display-4 title text-center m-0 p-0">More Details</h1>
        </div>

        <div class="container">
            <h3 class="text-left my-5" style=" color: #333333;"><i class="far fa-building" ></i>
                Institution Type X </h3>

            <p>Lorem ipsum dolor sit amet consectetur,
                 adipisicing elit. Aspernatur error commodi magni non repellendus vero vitae, impedit necessitatibus perferendis tenetur natus accusamus id,
                 saepe corporis eum quibusdam quaerat dignissimos cum?</p>
            <p>Lorem ipsum dolor sit amet consectetur,
             adipisicing elit. Aspernatur error commodi magni non repellendus vero vitae, impedit necessitatibus perferendis tenetur natus accusamus id,
            saepe corporis eum quibusdam quaerat dignissimos cum?</p>


            <div class="container my-5">
                <hr>
                <h3 class="text-center my-5" style=" color: #333333;"><i class="far fa-building" ></i>
                    Examples</h3>
                    <div class="d-flex justify-content-center mt-5 mb-3">
                    <form class="form-inline">
                      <input class="form-control mr-sm-2 m-2" type="search" placeholder="Search here..." aria-label="Search" name="search">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" type="submit"><i class="fas fa-search mr-1"></i>Search</button>
                    </form>
                    </div>
                  <div class="row d-flex justify-content-center">
                    <div class="card col-sm-3 mx-4" style="width:300px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center my-4">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Mail: XXXX</p>
                          <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>

                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>





                  </div>
                  <div class="row d-flex justify-content-center my-4">
                    <div class="card col-sm-3 mx-4" style="width:300px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>


                  </div>
                  <div class = "row d-flex justify-content-center my-4">
                    <div class="card col-sm-3 mx-4" style="width:300px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>
                      <div class="card col-sm-3 mx-4" style="width:400px">
                        <div class="d-flex justify-content-center my-3">
                        <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                        </div>
                        <hr>
                        <div class="card-body d-flex flex-column text-center">
                            <h4 class="card-title">IUG</h4>
                            <p class="card-text">Mail: XXXX</p>
                            <p class="card-text">Volunteers: XXXX</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#"><i class="fas fa-link hyperlink"></i></a>
                        </div>
                      </div>

                  </div>
                  <div class="container d-flex justify-content-center">
                    <ul class="pagination m-3">
                      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item "><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">...</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </div>
              </div>
              </div>





        </div>


















             <!-- Footer -->
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
  <!-- Footer -->


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



