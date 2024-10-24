<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IBIK NEWS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">

        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="/" class="navbar-brand mt-3">
                        <p class="text-primary display-6 fw-bold mb-2" style="line-height: 0;">IBIK NEWS</p>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto border-top">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="detail-page.html" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown">Categories</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    @foreach ($categories as $category)
                                        <a href="/category/{{ $category->slug }}"
                                            class="dropdown-item">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <a href="about.html" class="nav-item nav-link">About Us</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="mb-4">Category {{ $categoryName[0] }}</h2>
            @foreach ($posts as $post)
                <div class="row mb-3">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ Storage::url($post->thumbnail) }}" class="w-100">
                            </div>
                            <div class="col-lg-6">
                                <a href="/{{ $post->slug }}">
                                    <h3>{{ $post->title }}</h3>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{\Carbon\Carbon::parse($post->published_date)->format('d M Y')}}</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
    <!-- Single Product End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="detail-page.html" class="d-flex flex-column flex-wrap">
                            <p class="text-white mb-0 display-6">IBIK NEWS</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-between">
                <div class="col-lg-6 col-xl-4">
                    <div class="footer-item-1">
                        <h4 class="mb-4 text-white">Get In Touch</h4>
                        <p class="text-secondary line-h">Address: <span class="text-white">Jl. Rangga Gading No.01,
                                Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16123</span>
                        </p>
                        <p class="text-secondary line-h">Email: <span class="text-white">info@ibik.ac.id</span></p>
                        <p class="text-secondary line-h">Phone: <span class="text-white">+62 251 8337733</span></p>
                        <div class="d-flex line-h">
                            <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-twitter text-dark"></i></a>
                            <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-facebook-f text-dark"></i></a>
                            <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i
                                    class="fab fa-youtube text-dark"></i></a>
                            <a class="btn btn-light btn-md-square rounded-circle" href=""><i
                                    class="fab fa-linkedin-in text-dark"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="d-flex flex-column text-start footer-item-3">
                        <h4 class="mb-4 text-white">Categories</h4>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Sports</a>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Magazine</a>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Lifestyle</a>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Politician</a>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Technology</a>
                        <a class="btn-link text-white" href=""><i
                                class="fas fa-angle-right text-white me-2"></i>
                            Intertainment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="footer-item-2">
                        <div class="d-flex flex-column mb-4">
                            <h4 class="mb-4 text-white">Recent Posts</h4>
                            <a href="detail-page.html">
                                <div class="d-flex align-items-center">
                                    <div class=" border border-2 border-primary overflow-hidden"
                                        style="width: 140px;">
                                        <img src="img/news-3.jpg" class="img-zoomin img-fluid w-100" alt="">
                                    </div>
                                    <div class="d-flex flex-column ps-4">
                                        <p class="text-uppercase text-white mb-3">Life Style</p>
                                        <a href="detail-page.html" class="h6 text-white">
                                            Get the best speak market, news.
                                        </a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec
                                            9, 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="detail-page.html">
                                <div class="d-flex align-items-center">
                                    <div class=" border border-2 border-primary overflow-hidden"
                                        style="width: 140px;">
                                        <img src="img/news-2.jpg" class="img-zoomin img-fluid  w-100" alt="">
                                    </div>
                                    <div class="d-flex flex-column ps-4">
                                        <p class="text-uppercase text-white mb-3">Sports</p>
                                        <a href="detail-page.html" class="h6 text-white">
                                            Get the best speak market, news.
                                        </a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec
                                            9, 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
