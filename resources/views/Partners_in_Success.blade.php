<!DOCTYPE html>
<html lang="en">
<head>
  <title>Partners in Success</title>

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
<link rel="stylesheet" type="text/css" href="{{ asset('CSS\Home_index.css') }}">



</head>
<body>
        <!--Navbar 1-->
        <div class="d-flex justify-content-between" style="background-color: #252525;">
            <div class="pl-2 py-1" >
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
            </div>
          </div>

          <!--Navbar 2-->

        @include('include.navbar')

              <!--Page Title-->
           <div class="container-fluid title text-center ">
            <h1 class="p-4 display-4 title text-center m-0 p-0">Partners in Success</h1>
        </div>



        <div class="container my-5">
            <h3 class="text-center my-5" style=" color: #333333;"><i class="far fa-building" ></i>
                Check Them Out!</h3>
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
<footer class="bg-dark text-lg-start" style="color: white;" >
    <!-- Grid container -->
    <div class="container p-4" >
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase footerTitle mb-4">Your Opinion Matters</h5>
          <form action="#" novalidate class="mt-4">
            <div class="form-group">
              <input class="form-control mr-sm-2" type="text" placeholder="Name" aria-label="name">
            </div>
            <div class="form-group">
              <input class="form-control mr-sm-2" type="number" placeholder="Phone Number" aria-label="phone_number">
            </div>

              <div class="form-group">
                <input class="form-control mr-sm-2" type="email" placeholder="E-Mail" aria-label="email" style="width: 100%;">
              </div>
              <div class="form-group mt-4">
                  <textarea rows="3" class="form-control" placeholder="Message text"></textarea>

              </div>
              <button class="btn btn-outline my-2 my-sm-0 btn2" type="submit">Send</button>
          </form>


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase footerTitle mb-4">Useful Links</h5>

          <ul class="list-unstyled mb-0">
            <li class="footerLink">
              <a href="#" class="text-white ">Articles</a>
            </li>
            <li class="footerLink">
              <a href="#" class="text-white ">Volunteer Work Standards</a>
            </li>
            <li class="footerLink">
              <a href="#" class="text-white ">Volunteer Work benefits</a>
            </li>
            <li class="footerLink">
              <a href="#" class="text-white ">Guides</a>
            </li>
            <li class="footerLink">
                <a href="#" class="text-white ">News</a>
              </li>
              <li class="footerLink">
                <a href="#" class="text-white ">Staff</a>
              </li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase footerTitle mb-4">Contact Us</h5>

          <ul class="list-unstyled">
            <li class="footerLink">
              <a href="#!" class="text-white "><i class="fas fa-phone mr-2"></i>00-00000000</a>
            </li>
            <li class="footerLink">
              <a href="#!" class="text-white "><i class="fas fa-envelope mr-2"></i>info@iug.org</a>
            </li>
            <li class="footerLink">
              <a href="#!" class="text-white "><i class="fas fa-map-marker-alt mr-2"></i>Palestine-Gaza</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 d-flex justify-content-between" style="background-color: #666666">
        <div class="pl-2 py-1" >
            <a href="#"><i class="fab fa-facebook-square n1 facebook"></i></a>
            <a href="#"> <i class="fab fa-youtube-square n1 youtube"></i></a>
            <a href="#" data-toggle="tooltip" title="Mail"> <i class="fas fa-envelope n1 mail"></i>
        </div>
        <div> <a href="#" class="pptou mr-2">Privacy policy</a>|<a href="#" class="pptou ml-2">Terms of use</a></div>
     <div> © All rights reserved to the Islamic University of Gaza</div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


            <!--Tooltip Script-->

<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>
</html>
