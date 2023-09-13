<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta Informations-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Site Title-->
    <title>Host-Pro</title>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-32x32.png')  }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-16x16.png')  }}" sizes="16x16">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')  }}">
    <link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg')  }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico')  }}">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!--Style Assets-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl/owl.carousel.css') }}">


    <!--Theme Style-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')  }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<div id="page" class="site row">

    <h1 class="sr-only">HostPro - Best Hosting Theme, by <a href="http://nasiruddin.com"><em>Frontlayer</em></a> and <a href="http://themedesigner.in/"><em>Theme Designer</em></a></h1>

    <header id="header" class="site-header">

        <nav class="navbar navbar-defatult navbar-fixed-top fluid-navbar navbar-style1">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand"><img src="assets/icons/logo-white.png" alt="" class="logo-img"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Nav Opener</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right cart-nav">
                        <li><a href="#"><img src="assets/icons/cart.png" alt="HostPro Logo">2</a></li>
                    </ul>
                    <ul class="navbar-nav nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/admin">ADMIN</a></li>
                        <li><a href="clear">Очистить КЭШ</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Buy Pro Version</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    @yield('content')

    <!--Footer-->
    <footer id="footer" class="site-footer">
        <!--Footer Top-->
        <section class="row site-footer-top">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="col-sm-3 media-left">
                            <a href="index.html" class="media-object"><img src="assets/icons/logo-white.png" alt="HostPro Logo">&copy; 2018</a>
                        </div>
                        <div class="col-sm-9 media-body">
                            <p>All Rights Reserved by HostPro. Designed and Developed by <a href="https://bootstrapmart.com/">BootstrapMart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer Bottom-->
        <section class="row site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 widget-footer">
                        <h4 class="widget-title">Quick Links</h4>
                        <div class="row widget-content">
                            <ul class="menu">
                                <li><a href="index.html">Home Page</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-post.html">Blog Details</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Quick Pages</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 widget-footer">
                        <h4 class="widget-title">Stay Connected</h4>
                        <div class="row widget-content">
                            <p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque</p>
                            <ul class="list-unstyled fsocial">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 widget-footer">
                        <h4 class="widget-title">Sign Up for Our Newsletter</h4>
                        <div class="row widget-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  working accusantium doloremque laudantium, totam.</p>
                            <form action="#" class="input-group footer-subscribe-form">
                                <input type="email" class="form-control">
                                <span class="input-group-addon"><button type="submit" class="btn btn-primary">subscribe</button></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('assets/vendors/jquery-2.2.0.min.js')  }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/vendors/owl/owl.carousel.min.js')  }}"></script>
<script src="{{ asset('assets/vendors/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js')  }}"></script>
<script src="{{ asset('assets/vendors/isotope.pkgd.min.js')  }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded.pkgd.min.js')  }}"></script>
<!--Theme JS-->
<script src="{{ asset('assets/js/hostpro.js')  }}"></script>
</body>
</html>
