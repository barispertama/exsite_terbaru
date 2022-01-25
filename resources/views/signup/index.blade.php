<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Sign Up</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-u">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index.html">Exsite</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="mailto:help@Exsite.app">Help</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page1.html">Sign In</a></li></ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="form7 cid-sP6ZVFjb9S" id="form7-w">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Exsite</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="/signup" method="post" data-rcpha_sitekey="" data-rcpha_secretkey="" class="mbr-form form-with-styler mx-auto">
                    @csrf
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Create a new account
<br>Or <em><a href="sign" class="text-primary">sign in to your account</a></em></p>
                    <div class="row">
                        @if(session()->has('success'))
                        <div data-form-alert-danger="" class="alert alert-success col-12">
                            {{ session('sucess') }}
                        </div>
                        @endif

                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                        @error('name')
                        <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Full Name Tidak boleh kosong!</div>
                        @enderror
                            <input type="text" name="name" placeholder="Full Name" data-form-field="name" class="form-control" value="" id="fullname" @error('name') is-invalid @enderror>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            @error('email')
                            <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Email Tidak boleh kosong atau sudah terdaftar!</div>
                            @enderror
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email" @error('email') is-invalid @enderror>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="company">
                            @error('company')
                            <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Company Tidak boleh kosong!</div>
                            @enderror
                            <input type="text" name="company" placeholder="Company/Site Name, EXP : Google" data-form-field="company" class="form-control" value="" id="company" @error('company') is-invalid @enderror>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="password">
                            @error('password')
                            <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! Password Tidak boleh kosong! min 5 karakter</div>
                            @enderror
                            <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control" value="" id="password" @error('password') is-invalid @enderror>
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-v">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="mailto:help@Exsite.app" class="text-white">Help</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="page3.html" class="text-white">Live Demo</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="https://bugone.id" class="text-white">Bugone</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="https://ngomah.com" class="text-white">Ngomah</a>
                    </li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="https://databaik.com" class="text-white">Databaik</a>
                    </li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2021 Exsite. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
 
  
</body>
</html>