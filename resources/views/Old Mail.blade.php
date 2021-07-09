<!DOCTYPE html>
<html lang="en">
<head>
  <title>(20) Mail</title>

  <!-- Adding Unicode support. -->
  <meta charset="utf-8">
  <meta name="Keywords" content="mail,IUG, Voluntary, Volunteers, volunteering, IUG, voluntary IUG, Voluntary Department, Voluntary Department of IUG,
  التطوع,العمل التطوعي,العمل التطوعي في الجامعة الإسلامية,قسم العمل التطوعي,قسم العمل التطوعي في الجامعة الإسلامية,البريد">
    <meta name="description" content="Volunteering management at IUG: Mail.">

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
              <a class="navbar-brand" href="#">    <img src="Logo.png" alt="Logo" style="width:60px; " class="float-md-right img-fluid ">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Announcments</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Mail <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Add Institution</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Add Intiative</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Approval of Hours</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Add Responsible</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Add Photo</a>
                  </li>
                </ul>
              </div>
            </nav>

            <!--Page Title-->
           <div class="container-fluid title text-center ">
                <h1 class="p-4 display-4 title text-center m-0 p-0">Mail</h1>
            </div>

            <!--The main content-->
            <div class="container my-5">
            <div class="row">
                <div class="col-sm-3">
                    <div class="d-flex flex-column">
                    <h3 class="text-left" style=" color: #333333;"> <i class="fas fa-inbox ml-4 mr-2"></i> 
                        Inbox <span class="badge badge-danger">20</span></h3>
                        <a  href="#" data-toggle="modal" data-target="#newMessage">
                        <button class="btn btn-outline my-2 w-100 btn1" ><i class="fas fa-pencil-alt mr-1"></i>New Message</button>
                        </a>
                        <hr class="w-100 ml-0">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item active mail-nav">
                              <a class="nav-link" href="#"><i class="fas fa-inbox ml-4 mr-2"></i>Inbox (20)</a>
                            </li>
                            <li class="nav-item mail-nav">
                              <a class="nav-link" href="#"><i class="fas fa-star mr-2"></i>Starred</a>
                            </li>
                            <li class="nav-item mail-nav">
                              <a class="nav-link" href="#"><i class="fas fa-bookmark mr-2"></i>Important</a>
                            </li>
                            <li class="nav-item mail-nav">
                                <a class="nav-link" href="#"><i class="fas fa-share-square mr-2"></i>Sent</a>
                              </li>
                              <li class="nav-item mail-nav">
                                <a class="nav-link" href="#"><i class="fas fa-edit mr-2"></i>Draft</a>
                              </li>
                          </ul>
                        
                        </nav>
                </div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar">
                        <div class="d-flex justify-content-start">
                        <ul style="list-style-type:none;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Action
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Mark as read</a>
                              <a class="dropdown-item" href="#">Mark as unread</a>
                              <a class="dropdown-item" href="#">Mark as important</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                            </li>
                        </ul>
                        </div>
                            <div class="d-flex justify-content-end">
                            <form class="form-inline" action="#">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn1" type="submit"><i class="fas fa-search mr-1"></i>Search</button>
                              </form>
                            </div>
                    </nav>
                    <div class="container">
                        <div>
                        <table class="table table-hover" >
                          <thead>
                           
                          </thead>
                          <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                              <td>Yahia</td>
                              <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                              <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                              <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                              <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input m" type="checkbox" id="inlineCheckbox1" value="option1">
                                  </div>
                                  <i class="fas fa-star mr-3 control stars"></i> <i class="fas fa-bookmark  control bookmarks"></i>
                                </td>
                                <td>Yahia</td>
                                <th><a  href="#" data-toggle="modal" data-target="#rest">A meaningless message.</a></th>
                                <td>10:50 PM</td>
                              <td><a  href="#" data-toggle="modal" data-target="#Reply">Reply</a></td>

                            
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                      </div>
                          <!--Pagination-->
      <div class="container d-flex justify-content-center">
        <ul class="pagination m-3" >
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
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
            </div>
            </div>
            

<!--Message Modal-->
  <div class="modal fade" id="rest">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">.A meaningless message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p>A meaningless message.A meaningless message.A meaningless message.A meaningless message.A meaningless message.</p>
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-start">
            <button type="button" class="btn btn-primary m-1" data-dismiss="modal">Approve</button>
            <button type="button" class="btn btn-danger m-1" data-dismiss="modal">Deny</button>   
          </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="Reply">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Write a reply</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post">
                <textarea id="mytextarea" name="mytextarea" rows="10" cols="50">
                  Your message goes here...
                </textarea>
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
    

            <!--Write a message modal-->

            <div class="modal fade" id="newMessage">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Write a message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                      <form method="post">
                        <div class="form-group my-4">
                          <label for="name" class="mt-4">To<span class="text-danger">*</span>:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter name..." name="name" required>
                   
                        </div> 
                        <div class="form-group my-4">
                          <label for="title" class="mt-4">Title<span class="text-danger">*</span>:</label>
                          <input type="text" class="form-control" id="title" placeholder="Enter title..." name="title" required>
        
                        </div>
                        <div class="form-group my-4">
                          <label for="title" class="mt-4">Message<span class="text-danger">*</span>:</label>
                          <br>
                          <textarea id="mytextarea" name="mytextarea" rows="10" cols="50" required>
                          </textarea>
                   
                        </div>
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
        <img src="Logo.png" alt="Logo" style="width:100px; height: 100px; "  class="img-fluid ">  
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
