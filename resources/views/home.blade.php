<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="icon" href="/img/logo4.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg netflix-navbar netflix-padding-left netflix-padding-right">
        <div class="container-fluid">
            <div class="netflix-row">
                <section class="left d-flex align-items-center">
                    <a class="navbar-brand" href="#" style="color: red">NETFLIX</a>
                    <!-- Dropdown -->
                    <div class="netflix-dropdown-box dropdown">
                        <button class="netflix-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Browse
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Home</a></li>
                            <li><a class="dropdown-item" href="#">Drakor</a></li>
                            <li><a class="dropdown-item" href="#">Anime</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Romance</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                        </ul>
                    </div>
                    <!-- End Dropdown -->
                    <!-- Tabs -->
                    <div class="net-nav">
                        <section>
                            <button>Home</button>
                            <button>Movie</button>
                            <button>TV Series</button>
                            <button>New</button>
                            <button>Popular</button>
                            <button>My List</button>
                        </section>
                    </div>
                    <!-- End Tabs -->
                </section>
                <section class="right">
                    <!-- Right Section -->
                </section>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content -->
    <div style="height: 1000px;">
        <div>
            <section class="netflix-video">
                <div class="top"></div>
                <div class="bottom"></div>
                <video src="/video/2521.mp4" autoplay muted loop></video>
                <div class="content">
                    <section class="left">
                        <img src="/img/sdsh.png" alt="">
                        <div class="mt-2 d-flex">
                            <button type="button" class="btn btn-light m-2">
                                <i class="bi bi-play-fill" style="color: black;padding:0px;"></i> Play
                            </button>
                            <button type="button" class="btn btn-secondary m-2">
                                <i class="bi bi-info-circle"></i> More Info
                            </button>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
    <!-- Content End -->

    <!-- Slider -->
    <div class="slider-box">
        <section class="container-fluid slider1">
            <div class="d-flex justify-content-between">
                <p class="text-white"><b>For You Today</b></p>
                <div>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="position: relative; overflow: visible;">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/evangelion.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/re.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/fc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </section>
    </div>
    <!-- Slider End -->

    <!-- Slider -->
    <div class="slider-box">
        <section class="container-fluid slider2">
            <div class="d-flex justify-content-between">
                <p class="text-white"><b>Trending</b></p>
                <div>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="position: relative; overflow: visible;">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/25.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/anck.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/jjk.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </section>
    </div>
    <!-- Slider End -->
    
    <!-- Slider -->
    <div class="slider-box">
        <section class="container-fluid slider3">
            <div class="d-flex justify-content-between">
                <p class="text-white"><b>Maybe You Like It</b></p>
                <div>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="position: relative; overflow: visible;">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/op.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/unc.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <section class="d-flex" style="position: absolute;">
                            <!-- Card -->
                            <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                             <!-- Card -->
                             <div class="card">
                                <img src="/img/h&l.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <div>
                                            <i class="bi bi-play-circle-fill card-icon"></i>
                                            <i class="bi bi-plus-circle card-icon"></i>
                                        </div>
                                        <div>
                                            <i class="bi bi-hand-thumbs-up card-icon"></i>
                                        </div>
                                    </section>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class ="netflix-card-text m-0"style="color: rgb(35, 243, 28)"> 97% match </p>
                                        <span class="netflix-card-text m-2 text-white">Limited Series</span>
                                        <span class="netflix-card-text border text-white p-1">HD</span>
                                    </section>
                                    <p class="m-0 netflix-card-text text-white">Penuh ketegangan • Seru • Cyberpunk</p>
                                </div>
                            </div>
                            <!-- End Card -->
                        </section>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </section>
    </div>
    <!-- Slider End -->
    

    <!-- Footer -->
    <div class="container footer">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li>Audio & Subtitle</li>
                            <li>Media</li>
                            <li>Privacy</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Subtitle</li>
                            <li>Investor</li>
                            <li>Terms</li>
                            <li>Notice</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Help Center</li>
                            <li>Jobs</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Gift</li>
                            <li>Subscription</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-12">
                        <p class="copyright">© 2024 Netflix - <b style="color: white">Arya Rodman Karale</b></p>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
