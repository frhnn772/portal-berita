<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>PortalBerita</title>
</head>
<body>
    <nav class="navbar navbar-fixed navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
        <a class="navbar-brand" href="#">PortalBerita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/data">Data</a>
            <a class="nav-link" href="/galeri">Galeri</a>
        </div>
        </div>
        </div>
    </nav>
<div class="container">

@yield('content')

</div>
<!-- Footer-->
<footer class="mt-5">
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-5">
            <ul class="list-inline text-center">
                <li class="list-inline-item">
                    <a href="#!">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://instagram.com/@xyprhnn">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://githu.com/frhnn772">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
            <div class="small text-center text-muted fst-italic">Copyright &copy; Frhnn 2022</div>
        </div>
    </div>
</div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"></script>
</body>
</html>