@extends('site.layout.layout')
@section('body')


<body>
    <!-- start header -->
    <header class="p-3 bg-white text-black sticky-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        </a>
        <img src="{{asset('site')}}images/logo.png" alt="" class="rounded-circle px-2" style="width: 50px;" >
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-black link-warning " onclick="document.location='index.html'">Home</a></li>
            <li><a href="#services" class="nav-link px-2 text-black link-warning">Services</a></li>
            <li><a href="#" class="nav-link px-2 text-black link-warning" onclick="document.location='products.html'">Products</a></li>
            <li><a href="#" class="nav-link px-2 text-black link-warning dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Schools</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item active" href="#">cairo american college</a></li>
                    <li><a class="dropdown-item" href="#">British Internationa</a></li>
                    <li><a class="dropdown-item" href="#">Lycée la Liberté</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-link px-2 text-black link-warning dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item active" href="#">Faber-Castell</a></li>
                    <li><a class="dropdown-item" href="#">YOKEN</a></li>
                    <li><a class="dropdown-item" href="#">ROTRING</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-link px-2 text-black link-warning dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">categories</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item active" href="#">pens $ pencils</a></li>
                    <li><a class="dropdown-item" href="#">notebooks</a></li>
                    <li><a class="dropdown-item" href="#">bags</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </li>
            <li><a href="#contact" class="nav-link px-2 text-black link-warning">Contact Us</a></li>
            <li><a href="#about" class="nav-link px-2 text-black link-warning">About</a></li>
        </ul>
        <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item active" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <button type="button" class="btn btn-outline-dark me-2" onclick="document.location='login.html'">Login</button>
            <button type="button" class="btn btn-warning" onclick="document.location='Sign-up.html'">Sign-up</button>
        </div>
        </div>
    </div>
    </header>
    <!-- end header -->
    <!-- start landing -->
    <div class="landing">
        <div class="overlay"></div>
            <div class="text">
                <div class="content">
                    <h2>Hello ! <br> Get Ready to Have Such A Unique Experience With Us </h2>
                    <p>We have got your back. Here you will find all what you need from supplies. You don’t have to pay for useless supplies so you’re able to customize your package and you get only what you want . You can also get your child’s school
                        supplies and choose their favorites without rolling around for a long time .
                        All you have are in one place .
                        </p>
                </div>
            </div>
    </div>
    <!-- end landing -->
    <!--start services section-->
<div class="services" id="services">
<div class="container">
    <h2 class="special-heading"> Sevices </h2>
    <p> Don't be busy, be productive </p>
    <div class="service-content">
    <!--first column-->
    <div class="col">

        <!-- stat services-->
        <div class="srv" id="services">
        <div class="text">
            <h3> school packages </h3>
            <p>
            Graphic design is the process of visual communication and problem-solving using one or more of typography, photography and illustration.
            </p>
        </div>
        </div>
        <!-- <div class="srv">
            <div class="text">
            <h3> customize packages </h3>
            <p>
                Process of enhancing user satisfaction with a product by improving the usability, accessibility, and pleasure provided in the interaction.
            </p>
            </div>
        </div> -->
    </div>
    <!-- seconed column-->
    <div class="col">
            <div class="srv">
            <div class="text">
                <h3> office supplies </h3>
                <p>
                Web design encompasses many different skills and disciplines in the production and maintenance of websites.
                </p>
            </div>
            </div>

            <!-- <div class="srv">
                <div class="text">
                <h3> fast delivery </h3>
                <p>
                    Web development is a broad term for the work involved in developing a web site for the Internet or an intranet.
                </p>
                </div>
            </div> -->
    </div>
    <!-- third column-->
            <div class="col">
            <div class="image image-col">
                <img src="{{asset('site')}}images/photo_2023-03-11_18-02-09.jpg" alt="">
            </div>
            </div>
        <!-- end services-->
        </div>
    </div>
    </div>
</div>
</div>
<!--end sevices section-->

<!-- start products -->
<div class="products" id="products">
    <h1 class="special-heading">products</h1>
    <p>get ready to create</p>
    <div class="section-1">
        <h1> </h1>
    <div class="container">
        <div class="box">
            <img src="{{asset('site')}}images/Chameleon Deluxe Marker Set.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('site')}}images/Canson Bloc Aqu.Mont.300g.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/0720390009000.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/pencil-new.jpg" alt="">
            <div class="content">
                <h3> Faber-Castell pencil </h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/cat-05.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/cat-06.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="box">
            <img src="images/cat-07.jpg" alt="">
            <div class="content">
                <h3> Test title</h3>
                <p>price:</p>
            </div>
            <div class="info">
                <a href="checkout.html"> Add to cart </a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- start about section -->
<div class="about" id="about">
    <div class="container">
        <h2 class="special-heading"> About</h2>
        <p> Less is more work </p>
        <div class="about-content">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>
        <div class="text">
            <p>Suppmart is a startup company that addresses the problems that all parents have; which is the school supplies shenanigans that take place at the beginning of every academic year. The company started as a group of friends that have younger siblings that are still in school; sharing the problems that they are facing in collecting all the supplies before school starts. They threw a few ideas in order to see if it leads them anywhere useful; and after months of brainstorming and seeing if they can actually achieve the idea they dreamt about, they came up with a solution that would help parents now and the parents to be.</p>
            <hr/>
            <p>Suppmart is a solution they came up with in order to make their parent's lives easier and to have all parents lives stress free when it comes to the start of a new academic journey for their kiddos
            </p>
        </div>
        </div>
    </div>
    </div>

    <!-- start contact-->
    <div class="contact" id="contact">
    <div class="container">
    <h2 class="special-heading">
        Contact
    </h2>
    <p>We are born to create</p>
    <div class="content">
        <form action="">
            <input class="main-input" type="text" name="name" placeholder="your name">
            <input  class="main-input" type="email" name="email" placeholder="your email">
            <textarea class="main-input" name="message" placeholder="your message"></textarea>
            <input type="submit" value="send message">
        </form>
        <div class="info">
            <h4> get in touch </h4>
            <span class="phone">+00 123.456.789</span>
            <br>
            <span class="phone">+00 123.456.789</span>

            <h4> where we are </h4>
            <address>Awesome Address 17 <br> New York, NYC <br> 123-4567-890 <br> USA </address>
        </div>
    </div>
    </div>
    </div>
    <!-- end contact-->
    <!-- start footer -->
   <div class="footer">
    <div class="container">
    &copy;2023 <span> SuppMart </span> All Right Reserved

    <div class="social">
        Find Us On Social Networks <br>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
      </div>
   </div>
   <!-- end footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>


</body>
