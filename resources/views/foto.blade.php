@extends('layouts.main')

@section('content')
    <div style="width:100%;height:20px;">
    </div>
    <center>
        <h3>GALLERY</h3>
    </center>
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Basket</li>
                        <li data-filter=".filter-card">Marching Band</li>
                        <li data-filter=".filter-web">Sepak Bola</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="data" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 1</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket 2</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 1</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 2</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket 3</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 2</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 3</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 3</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div style="width:100%;height:200px;">
    </div>
@endsection
