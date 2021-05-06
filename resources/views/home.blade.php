@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <h1>Digitalize</h1>
          <h2>We are team of designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <!-- ======= about us Section ======= -->

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('img/bootstrap-themes.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">About Us</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
            </div>
        </div>

    <!-- ======= feature Section ======= -->
        <div class="container col-xxl-8 px-4 py-5" id="featured-3">
            <h1 class="display-5 fw-bold lh-1 mb-3">Services</h1>
            <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <div class="feature-icon bg-primary bg-gradient">
                    <span class="material-icons">lightbulb</span>
                </div>
                <h2>Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
            <div class="feature col-md-4">
                <div class="feature-icon bg-primary bg-gradient">
                    <span class="material-icons">business_center</span>
                </div>
                <h2>Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
            <div class="feature col-md-4">
                <div class="feature-icon bg-primary bg-gradient">
                    <span class="material-icons">corporate_fare</span>
                </div>
                <h2>Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>

            </div>
            </div>
        </div>

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container col-xxl-8 px-4 py-5"">
    
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>
    
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container col-xxl-8 px-4 py-5"">
    
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Est labore ad</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="icon-box mt-5">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Harum esse qui</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="icon-box mt-5">
                    <i class="bx bx-images"></i>
                    <h4>Aut occaecati</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="icon-box mt-5">
                    <i class="bx bx-shield"></i>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{asset('img/features.jpg')}}");'></div>
            </div>
    
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container col-xxl-8 px-4 py-5"">
    
            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-7.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
                <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('img/clients/client-8.png')}}" class="img-fluid" alt="">
                </div>
                </div>
    
            </div>
    
            </div>
        </section><!-- End Clients Section -->

      <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
    
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>
    
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
                </div>
            </div>
    
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                        <a href="{{asset('img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="{{asset('img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{asset('img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{asset('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                        </div>
                        </div>
    
            </div>
    
            </div>
        </section><!-- End Portfolio Section -->

        <section id="blog" class="blog">
            <div class="container col-xxl-8 px-4 py-5"">

            </div>
        </section>

  </main>


@endsection