<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('webinar-lp/assets/css/bootstrap.min.css') }}" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('webinar-lp/assets/css/flickity.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('webinar-lp/assets/css/style.css') }}">
    <title>Mentify Landing Page</title>
</head>
<body>

<!-- Navbar -->
<section class="fixed-top mb-4">
    <nav class="navbar navbar-expand-lg bg-white static-top navHeaderBottom">
        <div class="container col-xxl-10">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('webinar-lp') }}/assets/img/logo.png">
            </a>
            <button class="navbar-toggler border-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="bi bi-list"></i>
					</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto d-flex justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kelas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#">Karya Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Kelas Saya</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-lg-auto">
                    <a class="nav-link py-3 px-2 px-lg-2 text-dark" href="https://github.com/twbs" target="_blank" rel="noopener">
                        <img src="{{ asset('webinar-lp') }}/assets/img/buy-icon.png">
                        <!--<small class="d-lg-none ms-2">GitHub</small>-->
                    </a>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <a href="#" class="nav-link py-2 px-0 px-lg-2 text-dark">
                        <img src="{{ asset('webinar-lp') }}/assets/img/asset-avatar-nav.png" class="img-fluid rounded">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="static-top shadow-sm bg-body rounded" id="pill-nav">
        <div class="container">
            <header class="d-flex justify-content-center py-4">
                <ul class="nav nav-pills pill-nav">
                    <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Mentify Bootcamp</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Mentify Lite</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active">Online Workshop</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Webinar</a></li>
                </ul>
            </header>
        </div>
    </section>
</section>
<section id="hero">
    <div class="container col-xxl-10 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-2">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('webinar-lp') }}/assets/img/hero-img.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-6 fw-bold lh-1 mb-3">Online Workshop</h1>
                <p class="lead hero-lead">Pelajari UX Writing dan kembangkan skillmu agar bisa membuat desain dengan copy yang mudah dimengerti.
                    Pada kelas UX Writing ini kamu akan belajar mengenai UX Writing lebih dalam dimulai dari fundamental
                    hingga praktik di dunia kerja</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 cta-hero">Pilihan Workshop</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="workshop-list">
    <div class="container col-xxl-10 px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-2">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold lh-1 mb-3">Berbagai Pilihan Workshop</h1>
                <div class="col-lg-10">
                    <p class="lead hero-lead fs-6">Kami menyediakan berbagai pilihan workshop, kamu dapat memilih sesuai
                        dengan keinginan kamu untuk mendalami ataupun mempelajari mengenai UX dan product
                        design <strong>sesuai keinginan dan kebutuhan kamu.</strong> </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                           aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary border-left-0 border" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row mb-4 flex-lg-row">
            <div class="col-lg-12 col-sm-2 col-xs-12">
                <!--<span class="badge rounded-pill badge-text">Hai Evan, saat ini kamu memiliki kuota untuk  mengikuti 1
                    workshop secara gratis dari daftar workshop berikut </span>-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-pills-course">
                    @foreach($category as $cat)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{ $cat->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-xs-1 g-4 mt-4">
            @foreach($webinar as $wb)
            <div class="col">
                <div class="card h-100">
                    <div class="card-header">
                        <img src="{{ asset('webinar-lp') }}/assets/img/logo-small-white.png">
                        <h5 class="card-title mt-2">
                            {{ $wb->title }}
                        </h5>
                    </div>
                    <!--<img src="..." class="card-img-top" alt="...">-->
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mentor-block">
                            <div class="mentor-thumbnail-list">
                                <img src="{{ asset('webinar-lp') }}/assets/img/mentor1.png" class="img-fluid img-rounded">
                                <img src="{{ asset('webinar-lp') }}/assets/img/mentor2.png" class="img-fluid img-rounded mentor-thumbnail">
                                <img src="{{ asset('webinar-lp') }}/assets/img/mentor3.png" class="img-fluid img-rounded mentor-thumbnail">
                            </div>
                            <h5><span class="badge rounded-pill bg-primary">{{ $wb->level }}</span></h5>
                        </div>
                        <h5 class="card-title mt-4">Mentor</h5>
                        <p class="card-text">{{ $wb->mentor_name }}</p>
                        <div class="row align-items-center">
                            <div class="col">
                                <h6>Workshop Penuh</h6>
                                <div class="progress">
                                    <div class="progress-bar full-course-progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-secondary">Sayang banget, workshop ini udah penuh kuotanya. </p>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-md btn-light btn-block btn-cta-course-full">Lihat silabus yang diberikan di workshop ini</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="benefit">
    <div class="container col-xxl-10 px-4 py-5">
        <h3 class="text-center fw-bolder">
            4 Keuntungan dari Workshop Mentify
        </h3>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <p class="text-small text-center">Workshop di mentify menawarkan berbagai keuntungan dibanding platform belajar lain, berikut beberapa keuntungan yang akan kamu dapatkan</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-xs-1 g-4 mt-4">
            <div class="col-lg-3">
                <div class="card shadow border-0 p-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="{{ asset('webinar-lp') }}/assets/img/bx-caret-right-circle.png">
                            Recording Class
                        </h5>
                        <p class="card-text text-muted mt-4">Kamu akan mendapatkan recording class agar kamu dapat mengingat kembali materi dan diskusi yang terjadi di workshop kamu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow border-0 p-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="{{ asset('webinar-lp') }}/assets/img/bx-trophy.png">
                            e-Certificate
                        </h5>
                        <p class="card-text text-muted mt-4">Workshop yang kamu ikuti akan memberikan e-certifikat yang dapat kamu publikiasikan ke portofolio maupun sosial media kamu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow border-0 p-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="{{ asset('webinar-lp') }}/assets/img/bx-bar-chart-alt-2.png">
                            Materi Workshop
                        </h5>
                        <p class="card-text text-muted mt-4">Workshop yang kamu ikuti akan memberikan e-certifikat yang dapat kamu publikiasikan ke portofolio maupun sosial media kamu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow border-0 p-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="{{ asset('webinar-lp') }}/assets/img/bx-award.png">
                            Interactive Live Session with Expert
                        </h5>
                        <p class="card-text text-muted mt-4">Kamu berkesempatan langsung untuk berinteraksi dengan Expert dalam meningkatkan skill dan knowledge kamu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonial">
    <div class="container col-xxl-8 px-4 py-5">
        <h3 class="text-center fw-bolder mb-4">
            Apa Kata <span class="text-purple">Mereka</span> yang pernah berpartisipasi?
        </h3>
        <div class="main-carousel mt-4">
            @foreach($testimonial as $testi)
            <div class="carousel-cell">
                <div class="row row-cols-1 row-cols-md-3 row-cols-xs-1 g-4 mt-4 d-flex align-items-center ms-5">
                    <div class="col-lg-7">
                        <div class="card rounded-4 p-3">
                            <div class="card-body">
                                <h2>
                                    ,,
                                </h2>
                                <p class="text-dark fw-bold">
                                    {{ $testi->testimony }}
                                </p>
                                <p class="text-start">
                                    {{ $testi->name }}<br>
                                    <span class="fw-bold">{{ $testi->activity }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 img-testimonial-list">
                        <img src="{{ asset('webinar-lp') }}/assets/img/testimoni_img1.jpg" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="cta mt-4">
    <div class="container col-xxl-12 px-4 py-5 d-flex justify-content-center align-items-center">
        <img src="{{ asset('webinar-lp') }}/assets/img/banner-cta.png" class="img-fluid mt-4">
    </div>
</section>
<section id="footer" class="p-5">
    <div class="container mt-4 ps-5">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('webinar-lp') }}/assets/img/logo.png" class="img-fluid">
                <p class="copywright-text mt-4">
                    Copyright © 2021 Mentify by Giza Lab
                </p>
            </div>
            <div class="col-lg-3">
                <h6>
                    Sitemap
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bootcamp</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mentify Life</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Karya Alumni</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kelas Saya</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>
                    About
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Our Team</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>
                    Get in touch
                </h6>
                <ul class="list-group list-group-horizontal bg-transparent border-0">
                    <li class="list-group-item bg-transparent border-0">
                        <img src="{{ asset('webinar-lp') }}/assets/img/instagram-icon.png" alt="">
                    </li>
                    <li class="list-group-item bg-transparent border-0">
                        <img src="{{ asset('webinar-lp') }}/assets/img/linkedin-icon.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('webinar-lp/assets/js/jquery-3.6.3.slim.min.js') }}" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script src="{{ asset('webinar-lp/assets/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('webinar-lp/assets/js/flickity.pkgd.min.js') }}"></script>
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        pageDots: true,
        contain: true
    });
</script>
</body>
</html>
