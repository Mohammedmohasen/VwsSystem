<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Page</title>

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
<link rel="stylesheet" type="text/css" href="{{ asset('CSS\index.css') }}">



   </style>
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
                    <a class="nav-link" href="DOV_Home.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Announcments.html">Announcments</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="DOV_Mail.html">Mail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Add_Institution.html">Add Institution</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Add__initative_ar.html">Add Intiative</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Add_Admin_ar.html">Add New Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.flickr.com/photos/iugaza/"">Add Photo</a>
                  </li>
                </ul>
              </div>
            </nav>

            <!--Page Title-->
           <div class="container-fluid title text-center ">
                <h1 class="p-4 display-4 title text-center m-0 p-0">Home</h1>
            </div>

            <!--Statstics-->
  <div class="container-fluid" id="Instructions" >


  <div class="row text-center" >
      <div class="Item m-5 col" style="color:#018756">
        <i class="fas fa-male icon1"></i>
      <p  class="numbers">0</p>


        <p class = "labels">Volunteers</p>
    </div>
    <div class="Item m-5 col" style="color: #EE6326;">
        <i class="far fa-calendar-check"></i>
        <p  class="numbers">0</p>
        <p class = "labels" >Volunteers finished</p>
    </div>

    <div class="Item m-5 col" style="color:#E2E82B">
        <i class="fas fa-hands-helping"></i>
         <p  class="numbers">0</p>
        <p class = "labels" >Under volunteering</p>
    </div>
    <div class="Item m-5 col" style="color: #F40909;">
        <i class="far fa-building" ></i>
            <p  class="numbers">0</p>
      <p class = "labels">Institutions</p>
  </div>
  </div>
  <div class="d-flex justify-content-center my-5 text-center" >

  <div class="Item mx-5" style="color:#018756">
    <i class="fas fa-fist-raised" ></i>
     <p  class="numbers">0</p>
      <p class = "labels" >Initiatives</p>
  </div>

  <div class="Item mx-5" style="color: #F40909;">
    <i class="fas fa-running"></i>
           <p  class="numbers">0</p>
      <p class = "labels" >Active initiatives</p>
  </div>
</div>
<div class="d-flex justify-content-center">
    <a href="#" data-toggle="modal" data-target="#Reset"><button class="btn btn-outline mb-5" id="resetButton"  >
        Reset</button></a>
  </div>
  </div>

  <!--search-->
  <div class="container my-5">
    <h2>Search</h2>
    <br>
    <!-- Nav for search -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#Student">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#Institution">Institution</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Intiative">Intiative</a>
      </li>
    </ul>

    <!-- Search pages -->
    <div class="tab-content mb-5">
      <div id="Student" class="container tab-pane active"><br>
        <h3>Student</h3>
        <p>Here you can search for a student by name or by ID:</p>

        <div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by name" aria-label="Search">

                <input class="form-control mr-sm-2 m-2" type="search" placeholder="Search by ID" aria-label="Search">
                <button class="btn btn-outline my-2 my-sm-0 btn1" type="submit"><i class="fas fa-search mr-1"></i>Search</button>
              </form>
              <div class="container table-responsive" style="height: 350px;">
                <p>Results</p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>ID</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Ali Saqer</a></th>
                      <td>10010109</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                     </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
                      <td>121212121</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Saqer</a></th>
                      <td>448488489</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Ali Saqer</a></th>
                      <td>10010109</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
                      <td>121212121</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Saqer</a></th>
                      <td>448488489</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
                      <td>121212121</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Mohsen</a></th>
                      <td>448488489</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editStudent">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit volunteering hours</button></a></th>
                    </tr>
                  </tbody>
                </table>
              </div>

        </div>
      </div>
      <div id="Institution" class="container tab-pane fade"><br>
        <h3>Institution</h3>
        <p>Here you can search for an institusion by name or by District:</p>

        <div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by name" aria-label="Search">

                <input class="form-control mr-sm-2 m-2" type="search" placeholder="Search by District" aria-label="Search">
                <button class="btn btn-outline my-2 my-sm-0 btn1" type="submit"><i class="fas fa-search mr-1"></i>Search</button>
              </form>
              <div class="container table-responsive" style="height: 350px;">
                <p>Results</p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>District</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                      <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                      <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a  href="#" data-toggle="modal" data-target="#resultInstitustion">Institution1</a></th>
                      <td>Gaza</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editInstitution">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1" >Delete</button></a></th>
                    </tr>
                  </tbody>
                </table>
              </div>

        </div>
      </div>
      <div id="Intiative" class="container tab-pane fade"><br>
        <h3>Intiative</h3>
        <p>Here you can search for an intiative by name ,by date and by end date :</p>

        <div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by name" aria-label="Search">



                <input class="form-control mr-sm-2 m-2" type="date" placeholder="Search by date" aria-label="Search">

                <input class="form-control mr-sm-2 m-2" type="date" placeholder="Search by end date" aria-label="Search">
                <button class="btn btn-outline my-2 my-sm-0 btn1" type="submit"><i class="fas fa-search mr-1"></i>Search</button>
              </form>
              <div class="container table-responsive" style="height: 350px;">
                <p>Results</p>
                <div>
                <table class="table table-hover" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>District</th>
                      <th>Date</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>
                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                    <tr>
                      <th><a href="#" data-toggle="modal" data-target="#resultIntiative" >Intiative1</a></th>
                      <td>Gaza</td>
                      <td>1-1-2021</td>
                      <th><a  href="#" data-toggle="modal" data-target="#editIntiative">
                        <button class="btn btn-outline my-2 my-sm-0 btn1" >Edit</button></a></th>
                        <th><a><button class="btn btn-outline my-2 my-sm-0 btn1">Delete</button></a></th>

                    </tr>
                  </tbody>
                </table>
              </div>
              </div>

        </div>
      </div>

    </div>
  </div>

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
              <label for="Institution_type" class="mt-4">District<span class="text-danger">*</span>:</label>
              <input type="text" class="form-control" id="District" placeholder="Enter District name..." name="District" required>
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
  <!--Edit Intiative Modal-->
  <div class="modal fade" id="editIntiative">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Intiative Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div  class="modal-body">
          <form action="#" class="validation" novalidate>
            <div class="form-group my-4">
                <label for="Institution_name" class="mt-4">Initiative name<span class="text-danger">*</span>:</label>
                <input type="text" class="form-control" id="Institution_name" placeholder="Enter Initiative name..." name="Institution_name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
          <div class="form-group my-4">
            <label for="Institution_type" class="mt-4">Initiative type<span class="text-danger">*</span>:</label>
            <input type="text" class="form-control" id="Institution_type" placeholder="Enter Initiative type..." name="Institution_type" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group my-4">
            <label for="Institution_type" class="mt-4">Initiative Place<span class="text-danger">*</span>:</label>
            <input type="text" class="form-control" id="Institution_type" placeholder="Enter Initiative Place..." name="Institution_type" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group my-4">
            <label for="Institution_type" class="mt-4">Description<span class="text-danger">*</span>:</label>
            <textarea
            class="form-control"
            style="height: 100px"
            id="Finish_details"
            placeholder=" description... "
            name="Finish_details"
            required
          ></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group my-4">
            <label for="Institution_type" class="mt-4">Volunteer Hours<span class="text-danger">*</span>:</label>
            <input type="text" class="form-control" id="Institution_type" placeholder="Enter Volunteer Hours..." name="Institution_type" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <div class="form-group my-4">
            <label>Enter the start date for Initiative: </label>
            <input  type="date" placeholder="New term date" aria-label="">
          </div>

          </form>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn  m-1 btn1" data-dismiss="modal">OK</button>

        </div>

      </div>
    </div>
  </div>

   <!--Student Modal-->
   <div class="modal fade" id="editStudent">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>Name: XXXXXX</p>
            <p>ID: XXXXXXXX</p>
            <p>Address: XXXX</p>
            <form action="#" class="validation" novalidate>
              <div class="form-group my-4">
                <label for="hours" class="mt-4">volunteering hours:<span class="text-danger">*</span>:</label>
                <input type="number" class="form-control" id="hours" placeholder="Enter number of volunteering hours..." name="hours" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </form>

            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn  m-1 btn1" data-dismiss="modal">OK</button>

        </div>

      </div>
    </div>
</div>

  <!-- Intiative data-->
  <div class="modal fade" id="resultIntiative">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Intiative Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>Intiative data goes here</p>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn  m-1 btn1" data-dismiss="modal">OK</button>

        </div>

      </div>
    </div>
  </div>

  <!--Institustion data-->
  <div class="modal fade" id="resultInstitustion">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Institustion Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>Institustion data goes here</p>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn  m-1 btn1" data-dismiss="modal">OK</button>

        </div>

      </div>
    </div>
  </div>

  <!--Institustion data-->
  <div class="modal fade" id="ResultStudent">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p>Student data goes here</p>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn  m-1 btn1" data-dismiss="modal">OK</button>

        </div>

      </div>
    </div>
  </div>




<!--Reset Modal-->
<div class="modal fade" id="Reset">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Reset</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
           <form class="form-inline">
               <label>Enter the date of  new term: </label>
                <input class="form-control m-4" type="date" placeholder="New term date" aria-label="">
                <label class="mr-4">Enter the end date here: </label>
                <input class="form-control m-4" type="date" placeholder="New term date" aria-label="">

              </form>
            </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
          <button type="button" class="btn btn-primary m-1" data-dismiss="modal">Send</button>
          <button type="button" class="btn btn-danger m-1" data-dismiss="modal">Cancel</button>

        </div>

      </div>
    </div>
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


            <!--Tooltip Script-->

<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>
</html>
