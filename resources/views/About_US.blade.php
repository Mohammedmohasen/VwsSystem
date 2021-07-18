<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us</title>

        <!-- Adding Unicode support. -->
        <meta charset="utf-8" />
        <meta
            name="Keywords"
            content="Student page,IUG, Voluntary, Volunteers, volunteering, IUG, voluntary IUG, Voluntary Department, Voluntary Department of IUG,
  التطوع,العمل التطوعي,العمل التطوعي في الجامعة الإسلامية,قسم العمل التطوعي,قسم العمل التطوعي في الجامعة الإسلامية,البريد"
        />
        <meta
            name="description"
            content="Student's main page for voluntary work of Islamic University of Gaza. "
        />

        <!-- The following line is used for responsive design -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--  Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />

        <!-- JQuery (For Bootstrap)  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper.js (For Bootstrap)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Font Awesome -->

        <link
            rel="stylesheet"
            href="{{ asset('css\all.css') }}"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous"
        />

        <!--CSS File-->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('CSS\Home_index.css') }}"
        />
    </head>
    <body>
        <!--Navbar 1-->
        <div
            class="d-flex justify-content-between"
            style="background-color: #252525"
        >
            <div class="pl-2 py-1">
                <!--
                <a href="#" data-toggle="tooltip" title="Messages"> <i class="fas fa-envelope n1"></i>
                  <span class="badge badge-danger rounded-circle" style="position: relative; right: 16px; bottom: 10px;">3</span></a>
-->
            </div>
            <div class="pl-2 py-1">
                <a href="#"
                    ><i class="fab fa-facebook-square n1 facebook"></i
                ></a>
                <a href="#">
                    <i class="fab fa-twitter-square n1 twitter"></i
                ></a>
                <a href="#">
                    <i class="fab fa-youtube-square n1 youtube"></i
                ></a>
                <a href="#"> <i class="fab fa-flickr n1 flicker"></i> </a>
                <a href="#"> <i class="fab fa-instagram n1 instagram"></i> </a>
            </div>

            <div class="pr-2 py-1">
                <a href="#" data-toggle="tooltip" title="Change to Arabic">
                    <i class="fas fa-language n1"></i
                ></a>
                <!--                <a href="#" data-toggle="tooltip" title="Sign Out"><i class="fas fa-sign-out-alt n1"></i></a>-->
            </div>
        </div>

        <!--Navbar 2-->
        @include('include.navbar')

        <!--Page Title-->
        <div class="container-fluid title text-center">
            <h1 class="p-4 display-4 title text-center m-0 p-0">About us</h1>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-sm-8">
                    <div class="paragraph">
                        <h3 class="paraTitle">Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dolorem maxime distinctio facere nobis
                            voluptatibus minima quas nihil odit blanditiis fuga
                            aspernatur, sint sequi? Quasi totam beatae velit
                            corrupti assumenda temporibus. Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Minima ratione
                            ullam eligendi esse. Dolorem cupiditate sint,
                            laboriosam eligendi ipsum quaerat aspernatur quod
                            pariatur, explicabo vero ratione cum quo saepe nisi!
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dicta, laboriosam eum ducimus, blanditiis
                            corporis dignissimos cum atqu e quam quo expedita
                            illo aliquid quidem laborum, libero quod rerum
                            provident in nam?
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="paragraph">
                        <h3 class="paraTitle">Title</h3>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dolorem maxime distinctio facere nobis
                            voluptatibus minima quas nihil odit blanditiis fuga
                            aspernatur, sint sequi? Quasi totam beatae velit
                            corrupti assumenda temporibus. Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Minima ratione
                            ullam eligendi esse. Dolorem cupiditate sint,
                            laboriosam eligendi ipsum quaerat aspernatur quod
                            pariatur, explicabo vero ratione cum quo saepe nisi!
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dicta, laboriosam eum ducimus, blanditiis
                            corporis dignissimos cum atqu e quam quo expedita
                            illo aliquid quidem laborum, libero quod rerum
                            provident in nam?
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="paragraph">
                        <div class="paragraph">
                            <h3 class="paraTitle">Title</h3>

                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolorem maxime distinctio
                                facere nobis voluptatibus minima quas nihil odit
                                blanditiis fuga aspernatur, sint sequi? Quasi
                                totam beatae velit corrupti assumenda
                                temporibus. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Minima ratione
                                ullam eligendi esse. Dolorem cupiditate sint,
                                laboriosam eligendi ipsum quaerat aspernatur
                                quod pariatur, explicabo vero ratione cum quo
                                saepe nisi! Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Dicta, laboriosam
                                eum ducimus, blanditiis corporis dignissimos cum
                                atqu e quam quo expedita illo aliquid quidem
                                laborum, libero quod rerum provident in nam?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('include.aboutus-footer')

        <!--Tooltip Script-->

        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>
