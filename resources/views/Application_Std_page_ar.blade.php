<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>تقديم طلب التطوع </title>

    <!-- Adding Unicode support.-->
    <meta charset="utf-8">
    <!-- The following line is used for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">
    <!-- JQuery (For Bootstrap)  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js (For Bootstrap)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
    <!--  Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" {{ asset('CSS\Application_Std_page_ar.css') }}">
</head>

<body>
    <!-- First Navbar -->
    <div class="d-flex justify-content-between" style="background-color: #252525;" dir="ltr">
        <div class="pl-2 py-1">
            <a href="#" class="white_space" data-bs-toggle="tooltip" data-bs-placement="bottom" title="الرسائل"><i
                    class="fas fa-envelope n1"></i>
                <span class="badge bg-danger rounded-circle"
                    style="position: relative; right:16px; bottom: 10px;">3</span>
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
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="تغيير الى اللغة الانجليزية"> <i
                    class="fas fa-language n1"></i></a>
            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="تسجيل الخروج"><i
                    class="fas fa-sign-out-alt n1"></i></a>
        </div>
    </div>
    <!-- Second Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="{{ asset('CSS\IUG_logo.png') }}" alt="Logo" style="width:60px;"
                    class="float-md-right img-fluid"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Student_Home.html">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Application_Std_page_ar.html" tabindex="-1"
                            aria-current="page">التقديم للعمل التطوعي</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="Suggest_initative_ar.html">اقتراح مبادرة </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="Student_mail_ar.html">البريد الالكتروني </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Page Title-->
    <div class="container-fluid title text-center">
        <h1 class="p-4 display-4 title text-center m-0 p-0">تقديم طلب تطوع</h1>
    </div>
    <!-- Tabs To choose between the institution and the initiative -->
    <div class="container my-4">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="institution-tab" data-bs-toggle="tab" href="#institution" role="tab"
                    aria-controls="institution" aria-selected="true">تقدم لطلب تطوع في مؤسسة</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="initiative-tab" data-bs-toggle="tab" href="#initiative" role="tab"
                    aria-controls="initiative" aria-selected="false">تقدم لطلب تطوع في مبادرة</a>
            </li>
        </ul>
        <!-- Tab content for Selected Tab -->
        <div class="tab-content mb-5" id="myTabContent">
            <!-- first tab content -->
            <div class="tab-pane fade show active container" id="institution" role="tabpanel"
                aria-labelledby="institution-tab">
                <br>
                <h5>تقدم لطلب تطوع في مؤسسة</h5>
                <p>يمكنك/ي هنا التقديم للعمل التطوعي لدى اي مؤسسة.</p>
                <br>
                <!-- form section -->
                <!-- Here the form for Institution search  -->
                <form action="" id="Search_Institution_form" class="pb-3 ">
                    <div class="row g-4 mb-3 align-items-center" id="row">
                        <div class="col-md">
                            <div class="form-floating mb-3 col-md" id="Select_Provinces_div">
                                <select class="form-select" id="Select_Institution_Provinces">
                                    <option id="All_Provinces" value="All_Provinces" selected>الكل</option>
                                    <option id="North_Gaza" value="North Gaza">شمال غزة</option>
                                    <option id="Gaza" value="Gaza">غزة</option>
                                    <option id="Wosta" value="Wosta">وسطة</option>
                                    <option id="Khan_Younes" value="Khan Younes">خان يونس</option>
                                    <option id="Rafah" value="Rafah">رفح</option>
                                </select>
                                <label for="Select_Provinces_label"> المحافظة التي تريد التطوع بها</label>
                            </div>
                        </div>
                        <div class="col-md ">
                            <div class="form-floating" id="Select_Type_div" style="bottom: 8px;">
                                <select class="form-select " id="Select_Type">
                                    <option id="All_Types" value="All_Types" selected>الكل</option>
                                    <option id="Governmental" value="Governmental">حكومية</option>
                                    <option id="Municipalities" value="Municipalities">بلديات</option>
                                    <option id="Civil_associations" value="Civil associations">جمعيات الاهلية
                                    </option>
                                    <option id="Institutions_of_civil_society" value="Institutions of civil society">
                                        مؤسسات
                                        المجتمع المدني</option>
                                    <option id="Health_centers" value="Health centers">مراكز الصحية</option>
                                    <option id=" Book_Sunnah " value=" Book and Sunnah ">دار الكتاب والسنة</option>
                                </select>
                                <label for="Select_Provinces_label"> نوع المؤسسة</label>
                            </div>
                        </div>
                        <div class="col-md ">
                            <div class="d-flex justify-content-right  pb-3  ">
                                <button class="btn btn-lg btn-block btn1 " type="button" dir="ltr"
                                    id="search_Institution_button"><i class="fas fa-search mr-1"></i> بحث
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Table Section for Institutions -->
                <div class="container">
                    <table class="table text-right ">
                        <thead class="table">
                            <tr>
                                <th scope="col">اسم المؤسسة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">النوع</th>
                                <th scope="col">المحافظة</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Institution_button"><i
                                                class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Institution_button"><i
                                                class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Institution_button"><i
                                                class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Institution_button"><i
                                                class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Institution_button"><i
                                                class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1"><i class="fas fa-plus"></i>
                                            تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1"><i class="fas fa-plus"></i>
                                            تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1"><i class="fas fa-plus"></i>
                                            تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">مؤسسة مارك للعمل التطوعي</th>
                                <td>جباليا الحلبي مقابل سوق جباليا </td>
                                <td>حكومية</td>
                                <td>جباليا</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Institution" dir="ltr">
                                        <button class="btn btn-outline my-2 my-sm-0 btn1"><i class="fas fa-plus"></i>
                                            تقديم طلب</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade container" id="initiative" role="tabpanel" aria-labelledby="initiative-tab">
                <br>
                <h5>تقدم لطلب تطوع في مبادرة</h5>
                <p>يمكنك/ي هنا التقديم للعمل التطوعي في اي مبادرة.</p>
                <br>
                <!-- form section -->
                <div class="pb-3">
                    <!-- here Initiative Search form  -->
                    <form action="" id="Initiative_form_Search">
                        <div class="row g-4 mb-3 align-items-center" id="row3">
                            <div class="col-md">
                                <div class="form-floating mb-3 col-md" id="Select_Provinces_div">
                                    <select class="form-select" id="Select_Initiative_Provinces">
                                        <option id="All_Provinces" value="All_Provinces" selected>الكل</option>
                                        <option id="North_Gaza" value="North Gaza">شمال غزة</option>
                                        <option id="Gaza" value="Gaza">غزة</option>
                                        <option id="Wosta" value="Wosta">وسطة</option>
                                        <option id="Khan_Younes" value="Khan Younes">خان يونس</option>
                                        <option id="Rafah" value="Rafah">رفح</option>
                                    </select>
                                    <label for="Select_Provinces_label"> المحافظة التي تريد التطوع بها</label>
                                </div>
                            </div>
                            <div class="col-md ">
                                <div class="d-flex justify-content-right pb-3">
                                    <button class="btn btn-lg  btn-block btn1" type="button"
                                        id="search_Initiative_button">بحث
                                        <i class="fas fa-search mr-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Table section-->
                <div class="container ">
                    <table class="table text-right ">
                        <thead class="table">
                            <tr>
                                <th scope="col">اسم المبادرة</th>
                                <th scope="col">العنوان</th>
                                <th scope="col">المحافظة</th>
                                <th scope="col">عدد ساعات التطوع</th>
                                <th scope="col">تاريخ البدء</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">تنظيف ملعب الكرة في الجامعة الاسلامية</th>
                                <td> غزة شارع الجامعات الجامعة الاسلامية</td>
                                <td>غزة</td>
                                <td>1</td>
                                <td>2020-10-11</td>
                                <td> <a href="#" data-bs-toggle="modal" data-bs-target="#Add_Initiative" dir="ltr">
                                    <button class="btn btn-outline my-2 my-sm-0 btn1" id="Add_Initiative_button"><i
                                            class="fas fa-plus"></i> تقديم طلب</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Add Institution model  -->
    <div class="modal fade" id="Add_Institution" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">تأكيد الطلب</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" id="Institution_form_requst">
                        <div class="form-group my-2">
                            <p> هل انت متاكد انك تقديم طلب تطوع لهذه المؤسسة؟ </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label id="Student_ID_label">الرقم الجامعي:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Student_ID">120180000</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1 align-items-center">
                                <div class="col-auto">
                                    <label id="Student_Name_label">اسم الطالب:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Student_ID">طالب</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="Institution_Name_label">اسم المؤسسة:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Institution_Name">مؤسسة</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="Provinces_label">المحافظة:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Provinces_selected">غزة</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="Type_label">نوع المؤسسة:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Type_selected">حكومية</label>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer d-flex justify-content-start">
                            <button type="button" class="btn btn-success m-1" data-bs-dismiss="modal"
                                id="submit_Institution_button">
                                تأكيد
                            </button>
                            <button type="button" class="btn btn-danger m-1" data-bs-dismiss="modal" id="cancel">
                                الغاء
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- the end of Institution model-->
    <!-- Add Initative model  -->
    <div class="modal fade" id="Add_Initiative" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">تأكيد الطلب</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" id="Initative_form_requst">
                        <div class="form-group my-2">
                            <p> هل انت متاكد انك تقديم طلب تطوع لهذه المبادرة؟ </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label id="Student_ID_label">الرقم الجامعي:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Student_ID">120180000</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1 align-items-center">
                                <div class="col-auto">
                                    <label id="Student_Name_label">اسم الطالب:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Student_ID">طالب</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="Initative_Name_label">اسم المبادرة:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Initative_Name">مبادرة</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="Provinces_label">المحافظة:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="Initative_Provinces_selected">غزة</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="hours_number_label">عدد ساعات التطوع:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="hours_number">1</label>
                                </div>
                            </div>
                            <div class="row g-2 pt-1  align-items-center">
                                <div class="col-auto">
                                    <label id="starting date_label">تاريخ البدء:</label>
                                </div>
                                <div class="col-auto">
                                    <label id="starting date">2021-10-11</label>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer d-flex justify-content-start">
                            <button type="button" class="btn btn-success m-1" data-bs-dismiss="modal"
                                id="submit_Initative_button">
                                تأكيد
                            </button>
                            <button type="button" class="btn btn-danger m-1" data-bs-dismiss="modal" id="cancel">
                                الغاء
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- the end of Initative model-->
    <!-- Footer -->
    <div class="jumbotron text-center  rounded-0" style="margin-bottom:0;" id="footer">
        <img src="{{ asset('CSS\IUG_logo.png') }}" alt="Logo" style="width:100px; height: 100px; " class="img-fluid ">
        <div>
            <a href="#" class="social"> <i class="fab fa-facebook-square facebook" style="user-select: auto;"></i></a>
            <a href="#" class="social"> <i class="fab fa-twitter-square twitter"></i></a>
            <a href="#" class="social"> <i class="fab fa-youtube-square youtube"></i></a>
            <a href="#" class="social"><i class="fab fa-flickr flicker"></i></a>
            <a href="#" class="social"><i class="fab fa-instagram instagram" style="user-select: auto;"></i></a>
        </div>
        <p id="rights" style="color: white;">كل الحقوق محفوظة لجامعة الاسلامية بغزة</p>
    </div>
    <!--Tooltip Script-->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>