<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body  class="loading">

    <!-- HEADER -->
    <div class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/home">Home</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/program">Program</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact-us">Contact US</a></li>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div>
    </div> <!-- .site-header -->


    @yield('slider')
    

    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Tugas Praktiktikum Kelompok Pemrogram Web Lanjut</h3>
                    <p>1. Fathin Naufaliya (2041723015) 
                  <br>2. Muhammad Dhiyaul Auliya (2041723007)</p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="image-holder">
                        <img src="images/laravel.png">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>NEW PRODUCT ?</h2>
                    <a href="/contact-us">Klik Here</a>
                </div>
            </div>
        </div>
    </div>

    

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy; 2021</p>
                    <br>Fathin Naufaliya & Muhammad Dhiyaul Auliya</br>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>    
    
</body>
</html> 