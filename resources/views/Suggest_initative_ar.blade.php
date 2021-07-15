<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <title>اقتراح مبادرة</title>

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
      href=" {{ asset('CSS\Susggest_initative_ar.css') }}"
    />
  </head>

  <body>
    <!-- First Navbar -->
    <div
      class="d-flex justify-content-between"
      style="background-color: #252525"
    >
      <div class="pl-2 py-1">
        <a
          href="#"
          class="white_space"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="الاشعارات"
          ><i class="fas fa-bell n1"></i>
          <span
            class="badge bg-danger rounded-circle"
            style="position: relative; left: 16px; bottom: 10px"
            >3</span
          >
        </a>
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
            src="{{ asset('CSS/IUG_logo.png') }}"
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
         @include('include.stdnavbar')
        </div>
      </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
        <h1 class="p-4 display-4 title text-center m-0 p-0">اقتراح مبادرة</h1>
      </div>
    <!--Instruction box-->
    <div class="container my-4">

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
          <li class="mt-1">أن تكون المبادرة قريبة من تخصصك الجامعي.</li>
        </ul>
      </div>
      <!--Form-->
      <hr />
      <div class="card-body" id="Susggestion_Box">
        <form action="" id="Susggestion_Form">
          <div class="row g-4 mb-3" id="row1">
            <div class="col-md">
              <div class="form-floating" id="Student_ID_div">
                <input
                  type="text"
                  class="form-control"
                  id="Student_ID"
                  name="std_id"
                  value="0"
                  disabled
                />
                <label for="Student_ID_label">الرقم الجامعي<span class="text-danger">*</span></label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating" id="Student_Name_div">
                <input
                  type="text"
                  class="form-control"
                  id="Student_Name"
                  name="name"
                  value="الطالب/ة"
                  disabled
                />
                <label for="Student_Name_label">اسم الطالب/ة<span class="text-danger">*</span></label>
              </div>
            </div>
          </div>
          <div class="row g-4 mb-3" id="row2">
            <div class="col-md">
              <div class="form-floating" id="initiative_Name_div">
                <input
                  type="text"
                  class="form-control"
                  id="initiative_Name"
                  name="initiativeName"
                  value=""
                />
                <label for="initiative_Name_label"> اسم المبادرة<span class="text-danger">*</span></label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating" id="Institution_Address_div">
                <input
                  type="text"
                  class="form-control"
                  name="address"
                  id="Institution_Address"
                  value=""
                />
                <label for="Institution_Address_label">مكان المبادرة<span class="text-danger">*</span></label>
              </div>
            </div>
          </div>
          <div class="row g-4 mb-3" id="row3">
            <div class="col-md">
              <div class="form-floating" id="Volunteers_Number_div">
                <input
                  type="text"
                  class="form-control"
                  name='number'
                  id="Volunteers_Number"
                  value=""
                />
                <label for="Volunteers_Number_label">عدد المتطوعين</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating" id="Phone_num_div">
                <input
                  type="text"
                  name="phone"
                  class="form-control"
                  id="Phone_num"
                  value=""
                />
                <label for="Phone_num_label">رقم التواصل<span class="text-danger">*</span></label>
              </div>
            </div>
          </div>
          <div class="row g-4 mb-3" id="row4">
            <div class="col-md">
              <div class="form-floating mb-3 col-md" id="Select_Provinces_div">
                  <select class="form-select" id="Select_Provinces" required>
                      <option id="All_Provinces" value="All_Provinces" selected>الكل</option>
                      <option id="Jabalia" value="Jabalia">جباليا</option>
                      <option id="Gaza" value="Gaza">غزة</option>
                      <option id="Khan_Younes" value="Khan Younes">خان يونس</option>
                      <option id="Rafah" value="Rafah">رفح</option>
                  </select>
                  <label for="Select_Provinces_label"> المحافظة التي تريد التطوع بها<span class="text-danger">*</span></label>
              </div>
          </div>
            <div class="col-md">
              <div class="form-floating" id="Initiative_Details_div">
                <textarea
                  type="text"
                  class="form-control"
                  id="Initiative_Details"
                  style="height: 100px; max-width: 530px"
                  value=""
                ></textarea>
                <label for="Initiative_Details_label">تفاصيل المبادرة<span class="text-danger">*</span></label>
              </div>
            </div>

          </div>
          <div class="pt-1 d-flex justify-content-center">
            <button
              type="button"
              class="btn btn-lg btn-block btn1"
              id="Proposing_requst_button"
            >
              ارسال الطلب
            </button>
          </div>
        </form>
      </div>
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
  </body>
</html>
