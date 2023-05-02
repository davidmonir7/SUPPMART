
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuppMart</title>
    <link rel="stylesheet" href="{{asset('site')}}assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('site')}}assets\css\all.min.css">
    <link rel="stylesheet" href="{{asset('site')}}assets\css\supp.css">
    <link rel="preconnect" href="{{asset('site')}}https://fonts.googleapis.com">
    <link rel="preconnect" href="{{asset('site')}}https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
   
     <!-- start header -->
     <header class="p-3 bg-white text-black sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            </a>
            <img src="E:\xamp\htdocs\SUPPMART\public\site\assets\images\logo.png" alt="" class="rounded-circle px-2" style="width: 50px;" >
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
         
            
            <div class="text-end">
                <button type="button" class="btn btn-outline-dark me-2" onclick="document.location='login.html'">Login</button>
                <button type="button" class="btn btn-warning" onclick="document.location='Sign-up.html'">Sign-up</button>
            </div>
            </div>
        </div>
        </header>
        <!-- end header -->


    <script src="{{asset('site')}}public\site\assets\js\bootstrap.bundle.min.js"></script>
    <script src="{{asset('site')}}public\site\assets\js\all.min.js"></script>


<div class="page-body">
    @yield('body')
</div>

</body>
</html>
