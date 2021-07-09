<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <title>اضافة مسؤول</title>

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
    <link rel="stylesheet" href="..\CSS\Admin_DOV_page_ar.css">
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
              <a class="nav-link" href="DOV_Home.html">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="DOV_Mail.html">البريد</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Announcments.html">إضافة إعلانات أو أخبار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add_Institution.html">إضافة مؤسسة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add__initative_ar.html"> إضافة مبادرة </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                tabindex="-1"
                aria-current="page"
                href="Add_Admin_ar.html"
                >إضافة مسؤول</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.flickr.com/photos/iugaza/"">إضافة صورة</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
      <h1 class="p-4 display-4 title text-center m-0 p-0">إضافة مسؤول</h1>
    </div>
    <div class="container my-5">
    <form action="#" id="Add_Admin_Form form" class="form validation row gap" novalidate> 
        <div id="add-admin" class="col" style="min-width:400px;"> 
            <h3 class="text-left" style="color: #333333">
                <i class="fas fa-user"></i> إضافة مسؤول
              </h3>
        <div class="my-4">
            <label for="Admin_name" class="mb-2"
              >اسم المسؤول<span class="text-danger">*</span>:</label
            >
            <input
              type="text"
              class="form-control"
              id="username"
              placeholder="ادخل اسم المسؤول..."
              name="username"
              required
            />
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
          </div>
          <div class="my-4">
            <label for="password" class="mb-2"
              >كلمة السر<span class="text-danger">*</span>:</label
            >
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="ادخل كلمة السر..."
              name="password"
              
            />
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
          </div>
          <div class="my-4">
            <label for="password2" class="mb-2"
              >تأكيد كلمة السر<span class="text-danger">*</span>:</label
            >
            <input
              type="password"
              class="form-control"
              id="password2"
              placeholder="ادخل كلمة السر..."
              name="password2"
              
            />
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
          </div>
        </div>

    

        <div id="respons-admin" class="col" style="min-width:500px;">
          <h3 class="text-left" style="color: #333333">
            <i class="fas fa-user-cog"></i> صلاحيات المسؤول
          </h3>
          <p class="pt-2">يرجى تحديد صلاحيات المسؤول الذي تريد إضافته<span class="text-danger">*</span></p>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Approve_deny_request">
            <label class="Approve_deny_request_label" for="Approve_deny_request">قبول و رفض طلبات</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Search_edit_delete">
            <label class="Search_edit_delete_label" for="Search_edit_delete">بحث و تعديل و حذف</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Add_news">
            <label class="Add_news_label" for="Add_news">إضافة اعلانات واخبار</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Add_institution">
            <label class="Add_institution_label" for="Add_institution">إضافة مؤسسة</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Add_initiative">
            <label class="Add_initiative_label" for="Add_initiative">إضافة مبادرة</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Number_volunteering_hours">
            <label class="Number_volunteering_hours_label" for="Number_volunteering_hours">تحديد عدد ساعات التطوع</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="Allow_Add_admin">
            <label class="Allow_Add_admin_label" for="Allow_Add_admin">المقدرة على إضافة مسؤلين أخرين </label>
          </div>
        </div>
        <hr class="hr">
        <br>
            <div class="d-flex justify-content-center" style="padding-top: -10px;">
            <button
              class="btn btn-outline mr-sm-2 m-2 btn1"
              style="width: 240px; height: 70px;"
              type="submit"
              id="Add_Admin_button"
            >
            <i class="fas fa-user-plus"></i> إضافة مسؤول
            </button>
        </div>
    </form>
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
   <!-- <script>
    var tooltipTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
  <script>
    // Disable form submissions if there are invalid fields
    (function () {
      "use strict";
      window.addEventListener(
        "load",
        function () {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName("validation");
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(
            forms,
            function (form) {
              form.addEventListener(
                "submit",
                function (event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add("was-validated");
                },
                false
              );
            }
          );
        },
        false
      );
    })();
  </script> -->
      <script src="../JS/Add_Admin.js"></script>
  </body>
</html>
