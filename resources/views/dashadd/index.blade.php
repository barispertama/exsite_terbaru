<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exsite - Add New Policy</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
<link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
<link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dash"><p>Exsite</p></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li
                            class="sidebar-item  ">
                            <a href="dash" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li
                            class="sidebar-item  ">
                            <a href="dashadd" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Add new policy</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add New Policy </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dash">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add new policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <form method="POST" action="/dashadd"> 
                @csrf  
            <div class="col">
                <div class="card">
                    <div class="card-header">
                            <div class="form-group">
                                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" placeholder="Enter your title">
                              </div>
                    </div>
                    <div class="card-body">
                        <div id="full" input="isi">
                            <input type="hidden" class="form-control" name="isi">
                            <p>This page contains the terms and conditions for your use of our site and services (“Terms and Conditions”).
                                You must read these Terms and Conditions carefully before using our Website and Services. If you do not agree
                                to these Terms and Conditions, please do not use our Website and Services.</p>
                            <p><br></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <p>
                                <h4 class="breadcrumb-item">Publish</h4><br>
    
                                Paste in your app's privacy policy and 
                                deploy in seconds
                            </p>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="row">
                            <a class="btn btn-dark" type="submit" role="button">Publish Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
        </div>
        
        
    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Exsite — All rights reserved</p>
        </div>
    </div>
</footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
<script src="assets/vendors/quill/quill.min.js"></script>
<script src="assets/js/pages/form-editor.js"></script>

    <script src="assets/js/mazer.js"></script>
</body>

</html>
