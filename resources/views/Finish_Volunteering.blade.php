<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <title>انهاء التطوع</title>

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
    <link rel="stylesheet" href="..\CSS\Finish_Volunteering.css">
  </head>
  <body>
    <!-- First Navbar -->
    <div
      class="d-flex justify-content-between"
      style="background-color: #252525"
    >
    <div class="pr-2 py-1">
      <a
        href="#"
        data-bs-toggle="tooltip"
        data-bs-placement="bottom"
        title="تسجيل الخروج"
        ><i class="fas fa-sign-out-alt n1"></i
      ></a>
      <a
      href="#"
      data-bs-toggle="tooltip"
      data-bs-placement="bottom"
      title="تغيير الى اللغة الانجليزية"
    >
      <i class="fas fa-language n1"></i
    ></a>
    </div>
      <div class="pl-2 py-1">
        <a href="#"> <i class="fab fa-facebook-square n1 facebook"></i></a>
        <a href="#"> <i class="fab fa-twitter-square n1 twitter"></i></a>
        <a href="#"> <i class="fab fa-youtube-square n1 youtube"></i></a>
        <a href="#"> <i class="fab fa-flickr n1 flicker"></i></a>
        <a href="#"> <i class="fab fa-instagram n1 instagram"></i></a>
      </div>
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
            style="position: relative; left: 16px; bottom: 10px"
            >3</span
          >
        </a>
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
              <a class="nav-link" href="Institution_Home.html">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                tabindex="-1"
                aria-current="page"
                href="Finish_Volunteering.html"
                >انهاء التطوع</a
              >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="institution_mail_ar.html">البريد الالكتروني </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
      <h1 class="p-4 display-4 title text-center m-0 p-0">انهاء التطوع</h1>
    </div>
    <div id="body-container" class="container my-5">
      <div class="card-body" id="Instruction_box">
        <h6>
          يمكن/ي عزيزي/تي الطالب/ة من تقديم طلب اقتراح مبادرة جديدة غير مدرجة
          ضمن لوائحنا.
        </h6>
        <ul class="list-unstyled mb-2">
            <li class="mt-2">
              قم/ي بتعبئة الطلب وادخال المعلومات التالية و سنقوم بالنظر في طلبك.
            </li>
            <li class="mt-2">ولكن هناك بعض الشروط التي يجب اتباعها:</li>
        </ul>
        <ul class="list-styled mb-2">
          <li class="mt-1">أن تكون المبادرة في مدينتك او بالقرب من الجامعة.</li>
          <li class="mt-1">
            أن تكون المبادرة على الاقل تحت اشراف مؤسسة أو شركة.
          </li>
          <li class="mt-1"><strong>في حال كان الطالب قد انهى 60 ساعة عمل تطوعي الرجاء توضيح ذلك.</strong></li>
        </ul>
      </div>
      <hr>
      <form action="" id="Search_Institution_form">
        <div class="row g-4 mb-3" id="row3">
            <div class="col-md">
              <div class="form-floating " id="Student_ID_div">
                <input type="text" class="form-control" id="Student_ID">
                <label for="Student_ID_label">رقم الطالب</label>
            </div>
            </div>
            <div  class="col-md">
              <div class="form-floating " id="Student_ID_div">
                <input type="text" class="form-control" id="Student_ID">
                <label for="Student_ID_label">اسم الطالب</label>
            </div>
            </div>

            <div class="col-md">
                <div class="d-flex justify-content-right pb-3 height">
                    <button class="btn btn-lg btn-block btn1" type="button"
                        id="search_Institution_button">بحث
                        <i class="fas fa-search mr-1"></i></button>
                </div>
            </div>
        </div>
    </form>

    <div class="container table-responsive" style="height: 350px;">
      <p>نتائج البحث</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>الاسم</th>
            <th>رقم الطالب</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">علي صقر</a></th>
            <td>10010109</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
           </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
            <td>121212121</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Saqer</a></th>
            <td>448488489</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Ali Saqer</a></th>
            <td>10010109</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
            <td>121212121</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Saqer</a></th>
            <td>448488489</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Yahia Saqer</a></th>
            <td>121212121</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
          <tr>
              <th><a  href="#" data-toggle="modal" data-target="#ResultStudent">Mohsen Mohsen</a></th>
            <td>448488489</td>
            <th><a  href="#" data-toggle="modal" data-target="#editStudent">
              <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
              class="btn btn-outline my-2 my-sm-0 btn1" >انهاء التطوع</button></a></th>
          </tr>
        </tbody>
      </table>
    </div>
        <hr class="hr">
        <br>

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
   <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
    
  </button>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>اسم الطالب: محمود صقر</p>
        <p> رقم الطالب: 120185752</p>
        <hr>
        <p><label class="form-label" for="customFile">ارفع ملف او صورة للتقرير:</label>
          <input type="file" class="form-control" id="customFile" /></p>
        <p> <div class="form-group my-4">
          <label for="Finish_details" class="mb-2"
            >ادخل ايا ملاحظات<span class="text-danger"></span>:</label
          >
          <textarea
            class="form-control"
            style="height: 100px"
            id="Finish_details"
            placeholder=" ملاحظات اضافية "
            name="Finish_details"
            required
          ></textarea>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div></p>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button type="button" class="btn  m-1 btn1">انهاء التطوع</button>
      </div>
    </div>
  </div>
</div>

   <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">انهاء التطوع</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
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
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
      <script src="../JS/Add_Admin.js"></script>
  </body>
</html>
