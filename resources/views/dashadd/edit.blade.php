<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exsite - Edit Policy</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
<link rel="stylesheet" href="/assets/vendors/quill/quill.bubble.css">
<link rel="stylesheet" href="/assets/vendors/quill/quill.snow.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dash-app.html"><p>Exsite</p></a>
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
                            <a href="{{ url('dash') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li
                            class="sidebar-item  ">
                            <a href="{{ url('dashadd') }}" class='sidebar-link'>
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

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Policy </h3>
            </div>
           
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dash') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <form method="POST" action="{{ url('dashadd/'.$model->id) }}" enctype="multipart/form-data">
            @csrf 
            <input type="hidden" name="_method" value="PUT">   
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        <form>
                            <div class="form-group">
                                @error('judul')
                                <p class="text-danger">Maaf, input judul tidak boleh kosong!</p>
                                @enderror   
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $model->judul }}">
                                
                            </div>
                        </form>
                        <a href="{{ url($model->company.'/'.$model->slug) }}" class="text-xs text-gray-500 w-full px-4 py-0 mb-6">Permalink : {{ url($model->company.'/'.$model->slug) }}</a>
                    </div>
                    <div class="card-body">
                        @error('isi')
                        <p class="text-danger">Maaf, input tidak boleh kosong!</p>
                        @enderror                        
                        <textarea id="editor" name="isi">
                            {{ $model->isi }}
                        </textarea>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div> 
                            <h4 class="breadcrumb-item">Publish</h4>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div>
                            <p>
                                <h4 class="breadcrumb-item">Last Update</h4>
                                {{ $model->updated_at }}
                            </p>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div>
                            <a href="/{{ $model->company }}/{{ $model->slug }}">
                                <p>
                                    <h4 class="breadcrumb-item">Preview</h4>
                                        View Page <ion-icon name="open-outline"></ion-icon>
                                </p>
                            </a>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div>
                                <p>
                                        Copy Link <ion-icon type="button" name="copy-outline"  onclick="setClipboard('{{url($model->company.'/'.$model->slug)}}')"></ion-icon>
                                </p>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>

                            <div class="col-4">
                                <form action="{{ url('dashadd/'.$model->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure detele this file?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
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
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    
<script src="/assets/vendors/quill/quill.min.js"></script>
<script src="/assets/js/pages/form-editor.js"></script>
<script src="/assets/js/mazer.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script type="text/javascript">
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("Copied..!");
}
</script>
</body>

</html>
