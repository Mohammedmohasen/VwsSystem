<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <title>اضافة مبادرة</title>

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
      href="{{ asset('CSS\Application_Std_page_ar.css')}}"
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
            src="{{ asset('CSS/IUG_logo.png')}}"
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
         @include('include.dovnavbar')
        </div>
      </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
      <h1 class="p-4 display-4 title text-center m-0 p-0">اضافة مبادرة</h1>
    </div>
    <div class="container my-5">
      <h3 class="text-left" style="color: #333333">
        <i class="fas fa-seedling"></i> إضافة مبادرة
      </h3>
      <form action="#" id="Add_Initative_Form" class="validation" novalidate>
        <div class="my-4">
          <label for="Initative_name" class="mb-2"
            >اسم المبادرة<span class="text-danger">*</span>:</label
          >
          <input
            type="text"
            class="form-control"
            id="Initative_name"
            placeholder="ادخل اسم المبادرة..."
            name="Initative_name"
            required
          />
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div>
        <div class="form-group my-4">
          <label for="Initative_governrate" class="mb-2"
            >المحافظة<span class="text-danger">*</span>:</label
          >
          <select class="form-select" id="Select_Provinces">
            <option id="All_Provinces" value="All_Provinces" selected>الكل</option>
            <option id="North_Gaza" value="North Gaza">شمال غزة</option>
            <option id="Gaza" value="Gaza">غزة</option>
            <option id="Wosta" value="Wosta">وسطة</option>
            <option id="Khan_Younes" value="Khan Younes">خان يونس</option>
            <option id="Rafah" value="Rafah">رفح</option>
        </select>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div>
        <div class="form-group my-4">
          <label for="Initative_Address" class="mb-2"
            >مكان المبادرة<span class="text-danger">*</span>:</label
          >
          <input
            type="text"
            class="form-control"
            id="Initative_Address"
            placeholder="ادخل مكان المبادرة..."
            name="Initative_Address"
            required
          />
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div>
        <div class="form-group my-4">
          <label for="Initative_details" class="mb-2"
            >تفاصيل المبادرة<span class="text-danger">*</span>:</label
          >
          <textarea
            class="form-control"
            style="height: 100px"
            id="Initative_details"
            placeholder="ادخل تفاصيل المبادرة..."
            name="Initative_details"
            required
          ></textarea>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div>
        <div class="form-group my-4">
          <label for="Initative_hours_number" class="mb-3">
            عدد الساعات<span class="text-danger">*</span>:</label
          >
          <input
            type="text"
            class="form-control"
            id="Initative_hours_number"
            placeholder="ادخل عدد ساعات المبادرة..."
            name="Initative_hours_number"
            required
          />
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">الرجاء ملء هذه الخانة.</div>
        </div>
        <div class="d-flex justify-content-center">
        <button
          type="submit"
          id="Add_Initative"
          style="width: 150px"
          class="btn btn1 my-4"
        >
          اضافة مبادرة
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
        src="{{ asset('CSS\IUG_logo.png') }}"
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
    </script>
  </body>
</html>
