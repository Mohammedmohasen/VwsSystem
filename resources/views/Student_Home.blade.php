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
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="Student_Home.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Application_Std_page_ar.html">Apply for Volunteer Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Suggest_initative_ar.html">Suggest Intiative</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Student_mail_ar.html">Mail</a>
                  </li>
                </ul>
              </div>
            </nav>

               <!--Page Title-->
           <div class="container-fluid title text-center ">
            <h1 class="p-4 display-4 title text-center m-0 p-0">Home</h1>
        </div>


             <!--News And Announcments-->
          <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-sm-9">
                  <div class="  d-flex justify-content-between learnTitle">
                      <h5 class="mb-1">News</h5>
                      <a href="#" class="btn btn1 mb-1" >More</a>
                      </div>
                 <div class="row mt-3">
                  <div class="col-sm-3 news">
                      <div class="card " style =" width: 125%">
                          <img class="card-img-top" src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image">
                          <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Some text goes here, Some text goes here,Some text goes here</p>
                            <a href="#" class="btn btn1">Continue</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-3 news">
                      <div class="card " style =" width: 125%">
                          <img class="card-img-top" src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" >
                          <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Some text goes here, Some text goes here, Some text goes here</p>
                            <a href="#" class="btn btn1">Continue</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-3 news">
                      <div class="card " style =" width: 125%" >
                          <img class="card-img-top" src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" >
                          <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Some text goes here, Some text goes here, Some text goes here</p>
                            <a href="#" class="btn btn1">Continue</a>
                          </div>
                        </div>
                  </div>
                    </div>



                </div>
                <div class="col-sm-3">
                  <div class="  d-flex justify-content-between learnTitle">
                  <h5 class="mb-1">Announcments</h5>
                  <a href="#" class="btn btn1 mb-1" >More</a>
                  </div>

                  <div class="table-responsive mt-3" style="height: 335px;">
                      <table class="table table-hover">

                        <tbody>
                          <tr>
                              <th>09 01</th>
                            <td> <a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                          <tr>
                              <th>09 01</th>
                              <td><a href="#">Announcment content goes here</a></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>


                </div>

            </div>

        </div>


    <!--  Institutions cards -->
    <div class="container " style="margin-bottom: 200px; margin-top: 50px;" >
      <h5  class="learnTitle pt-5 pb-2">Institution Categories</h5>
      <!--Institutions Slides-->
      <div id="institutionsSlides" class="carousel slide carousel-multi-item" data-ride="carousel">



          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#institutionsSlides" data-slide-to="0" class="active"></li>
            <li data-target="#institutionsSlides" data-slide-to="1"></li>
            <li data-target="#institutionsSlides" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner mt-5" role="listbox">
              <div class="carousel-item active">
                  <div class="row d-flex justify-content-center">

                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                  </div>
              </div>

              <div class="carousel-item ">
                  <div class="row d-flex justify-content-center">

                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>




                  </div>
              </div>

              <div class="carousel-item ">
                  <div class="row d-flex justify-content-center">

                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <div class="card-body d-flex flex-column text-center">
                          <h4 class="card-title">IUG</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                             eum deserunt eius.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/IUG_logo.png')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <h4 class="card-title">IUG</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                           eum deserunt eius.</p>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>



                    <div class="card col-sm-3 mx-2" style="width:400px">
                      <div class="d-flex justify-content-center my-3">
                      <img class="card-img-top rounded-circle " src="{{ asset('CSS/v.jpg')}}" alt="Card image" style="width:150px; height: 150px;">

                      </div>
                      <hr>
                      <div class="card-body d-flex flex-column text-center">
                        <h4 class="card-title">IUG</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam accusantium voluptates delectus cumque reprehenderit? Dolore, dolorem in,
                           eum deserunt eius.</p>
                      </div>
                      <hr>
                      <div class="d-flex justify-content-center">
                        <a href="Details.html" class="btn btn1 mb-3" >More</a>
                      </div>
                    </div>





                  </div>
              </div>
              <a class="carousel-control-prev " href="#institutionsSlides" data-slide="prev" >
                  <span class="carousel-control-prev-icon back"  ></span>
                </a>
                <a class="carousel-control-next " href="#institutionsSlides" data-slide="next">
                  <span class="carousel-control-next-icon forward" ></span>
                </a>
          </div>



      </div>
  </div>

    <!--Statstics-->
    <div class="container-fluid" id="Instructions" style="margin-top: 100px;">


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

    <!-- Member Institutions -->
    <div class="container " style="margin-bottom: 200px; margin-top: 50px;" >
      <h5  class="learnTitle pt-5 pb-2">Member Institutions</h5>
      <!--Institutions Slides-->
      <div id="institutionsSlides2" class="carousel slide carousel-multi-item" data-ride="carousel">



          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#institutionsSlides2" data-slide-to="0" class="active"></li>
            <li data-target="#institutionsSlides2" data-slide-to="1"></li>
            <li data-target="#institutionsSlides2" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner mt-5" role="listbox">
              <div class="carousel-item active">
                  <div class="row d-flex justify-content-center">

                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  </div>
              </div>

              <div class="carousel-item ">
                  <div class="row d-flex justify-content-center">

                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  </div>
              </div>

              <div class="carousel-item ">
                  <div class="row d-flex justify-content-center">

                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  <div col-2>
                      <a href="#" class= "mx-4" data-toggle="tooltip" title="Institution name"> <img src="{{ asset('CSS/IUG_logo.png')}}" alt="Logo" style="width:80px; "></a>
                  </div>
                  </div>
              </div>
              <a class="carousel-control-prev " href="#institutionsSlides2" data-slide="prev" >
                  <span class="carousel-control-prev-icon back"  ></span>
                </a>
                <a class="carousel-control-next " href="#institutionsSlides2" data-slide="next">
                  <span class="carousel-control-next-icon forward" ></span>
                </a>
          </div>



      </div>
  </div>











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



