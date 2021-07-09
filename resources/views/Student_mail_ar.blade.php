<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <title>بريد الطالب</title>

    <!-- Adding Unicode support.-->
    <meta charset="utf-8" />
    <!-- The following line is used for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl"
      crossorigin="anonymous"
    />
    <!-- JQuery (For Bootstrap)  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js (For Bootstrap)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>
    <!--  Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href=" ..\CSS\Application_Std_page_ar.css"
    />
  </head>

  <body>
        <!-- First Navbar -->
        <div dir="ltr"
        class="d-flex justify-content-between"
        style="background-color: #252525"
      >
        <div class="pl-2 py-1">
          <a
            href="#"
            class="white_space"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title="الرسائل"
            ><i class="fas fa-envelope n1"></i>
            <span
              class="badge bg-danger rounded-circle"
              style="position: relative; right:16px; bottom: 10px"
              >3</span
            >
          </a>
        </div>
        <div class="pl-2 py-1">
          <a href="#"> <i class="fab fa-facebook-square n1 facebook"></i></a>
          <a href="#"> <i class="fab fa-twitter-square n1 twitter"></i></a>
          <a href="#"> <i class="fab fa-youtube-square n1 youtube"></i></a>
          <a href="#"> <i class="fab fa-flickr n1 flicker"></i></a>
          <a href="#"> <i class="fab fa-instagram n1 instagram"></i></a>
        </div>
        <div class="pr-2 py-1">
          <a
            href="#"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title="تغيير الى اللغة الانجليزية"
          >
            <i class="fas fa-language n1"></i
          ></a>
          <a
            href="#"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title="تسجيل الخروج"
            ><i class="fas fa-sign-out-alt n1"></i
          ></a>
        </div>
      </div>
    <!--second Navbar -->
    <nav
      class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-lg"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="../CSS/IUG_logo.png"
            alt="Logo"
            style="width: 60px"
            class="float-md-right img-fluid"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="تبديل التنقل"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="Student_Home.html">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Application_Std_page_ar.html">التقديم للعمل التطوعي</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Suggest_initative_ar.html">اقتراح مبادرة </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                tabindex="-1"
                aria-current="page"
                href="Student_mail_ar.html"
                >البريد الالكتروني
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
      <h1 class="p-4 display-4 title text-center m-0 p-0">البريد الالكتروني</h1>
    </div>
    <!--The main content-->
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-3">
          <div class="d-flex flex-column">
            <h3 class="text-left" style="color: #333333">
              <i class="fas fa-inbox ml-4 mr-2"></i> صندوق الوارد
              <span class="badge badge-danger">20</span>
            </h3>
            <a href="#" data-bs-toggle="modal" data-bs-target="#newMessage">
              <button class="btn btn-outline my-2 w-100 btn1">
                <i class="fas fa-pencil-alt mr-1"></i>رسالة جديدة
              </button>
            </a>
            <hr class="w-100 ml-0" />
          </div>
        </div>
        <div class="col-sm-9">
          <div class="container">
            <div class="tab-content pt-4">
              
              <div class="tab-pane container active" id="Voluntary Requests">
                <div class="container">
                  <table class="table table-hover">
                    <thead>
                      <th>اسم المرسل</th>
                      <th>العنوان</th>
                      <th>التاريخ</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                      <tr>
                        <td>Yahia</td>
                        <th>
                          <a href="#" data-bs-toggle="modal" data-target="#rest"
                            >A meaningless message.</a
                          >
                        </th>
                        <td>10:50 PM</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Message Modal-->
    <div class="modal fade" id="rest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">.رسالة بلا معني</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <p>
              رسالة بلا معني رسالة بلا معني. رسالة بلا معني. رسالة بلا معني.
              رسالة بلا معني.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--Write a message modal-->
    <div class="modal fade" id="newMessage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">اكتب رسالة</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close">
            </button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <form method="post">
              <div class="form-group my-2">
                <label for="name" class=""
                  >الى<span class="text-danger">*</span>:</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="ادخل الاسم..."
                  name="name"
                  required
                />
              </div>
              <div class="form-group my-2">
                <label for="title" class="mt-3"
                  >العنوان<span class="text-danger">*</span>:</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="title"
                  placeholder="ادخل عنوان..."
                  name="title"
                  required
                />
              </div>
              <div class="form-group my-2">
                <label for="title" class="mt-3"
                  >الرسالة<span class="text-danger">*</span>:</label
                >
                <br />
                <textarea
                  id="mytextarea"
                  class="form-control"
                  style="max-height: 200px;"
                  name="mytextarea"
                  rows="10"
                  cols="50"
                  required
                >
                </textarea>
              </div>
            </form>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer d-flex justify-content-start">
            <button
              type="button"
              class="btn btn-primary m-1"
              data-bs-dismiss="modal"
            >
              ارسال
            </button>
            <button
              type="button"
              class="btn btn-danger m-1"
              data-bs-dismiss="modal"
            >
              الغاء
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div
      class="jumbotron text-center rounded-0"
      style="margin-bottom: 0"
      id="footer"
    >
      <img
        src="..\CSS\IUG_logo.png"
        alt="Logo"
        style="width: 100px; height: 100px"
        class="img-fluid"
      />
      <div>
        <a href="#" class="social">
          <i
            class="fab fa-facebook-square facebook"
            style="user-select: auto"
          ></i
        ></a>
        <a href="#" class="social">
          <i class="fab fa-twitter-square twitter"></i
        ></a>
        <a href="#" class="social">
          <i class="fab fa-youtube-square youtube"></i
        ></a>
        <a href="#" class="social"><i class="fab fa-flickr flicker"></i></a>
        <a href="#" class="social"
          ><i class="fab fa-instagram instagram" style="user-select: auto"></i
        ></a>
      </div>
      <p id="rights" style="color: white">
        كل الحقوق محفوظة لجامعة الاسلامية بغزة
      </p>
    </div>
    <!--Tooltip Script-->
    <script>
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    </script>
  </body>
</html>
