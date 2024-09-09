@extends('layouts.user.guest')
@section('title') {{'User Dashboard | Laravel Auth '}} @endsection

@section('content')

<style>
    .service-box{
        height: 100% !important;
    }
</style>

<!-- Start  Page hero-->
<section class="page-hero hero-swiper-slider slider-parallax d-flex align-items-center " id="page-hero">
    <div class="social-icons ">
        <div class="sc-wraper dir-row sc-flat sc-size-40">
            <ul class="sc-list">
                <li class="sc-item" title="Facebook"><a class="sc-link" href="#0"><i
                            class="fab fa-facebook-f sc-icon"></i></a></li>
                <li class="sc-item" title="youtube"><a class="sc-link" href="#0"><i
                            class="fab fa-youtube sc-icon"></i></a></li>
                <li class="sc-item" title="instagram"><a class="sc-link" href="#0"><i
                            class="fab fa-instagram sc-icon"></i></a></li>
                <li class="sc-item" title="twitter"><a class="sc-link" href="#0"><i
                            class="fab fa-twitter sc-icon"></i></a></li>
            </ul>
        </div>
    </div>
    <!--Start  Swiper JS slider-->
    <div class="slider swiper-container">
        <div class="swiper-wrapper text-center">
            <!--first slider-->
            <div class="swiper-slide">
                <div class="slider-bg"
                    data-background="{{asset('frontend/assets/images/hero/hero-slider-bg-img-1.jpg')}}">
                    <div class="overlay-color"></div>
                </div>
                <div class="slide-content">
                    <div class="container">
                        <div class="hero-text-area   ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12 mx-auto ">
                                    <h4 class="slide-title" data-splitting="words">
                                        Best Software Development Company To <span class="hollow-text">Innovate
                                            Next</span> Modern Generation</h4>
                                </div>
                                <div class="col-9  col-md-10 col-lg-8 mx-auto ">
                                    <p class="slide-subtitle narrow-centerd-text " data-splitting="words">Fouzdar IT,
                                        provide complete software solutions with 100% clients satisfaction and that’s
                                        why we are one of the best software company in Bangladesh.</p>
                                </div>
                                <div class="col-12 ">
                                    <div class="cta-links-area "><a class=" ma-btn-primary cta-link cta-link-primary  "
                                            href="#0">start now</a><a class=" ma-btn-primary cta-link  "
                                            href="#0">Contact us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--second slider-->
            <div class="swiper-slide">
                <div class="slider-bg "
                    data-background="{{asset('frontend/assets/images/hero/hero-slider-bg-img-2.jpg')}}">
                    <div class="overlay-color"></div>
                </div>
                <div class="slide-content">
                    <div class="container">
                        <div class="hero-text-area ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12 mx-auto ">
                                    <h4 class="slide-title" data-splitting="words">
                                        Best Software Development Company To <span class="hollow-text">Innovate
                                            Next</span> Modern Generation</h4>
                                </div>
                                <div class="col-9  col-md-10 col-lg-8 mx-auto ">
                                    <p class="slide-subtitle narrow-centerd-text " data-splitting="words">Fouzdar IT,
                                        provide complete software solutions with 100% clients satisfaction and that’s
                                        why we are one of the best software company in Bangladesh.</p>
                                </div>
                                <div class="col-12 ">
                                    <div class="cta-links-area "><a class=" ma-btn-primary cta-link cta-link-primary  "
                                            href="#0">start now</a><a class=" ma-btn-primary cta-link  "
                                            href="#0">Contact us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--third slider-->
            <div class="swiper-slide">
                <div class="slider-bg"
                    data-background="{{asset('frontend/assets/images/hero/hero-slider-bg-img-3.jpg')}}">
                    <div class="overlay-color"></div>
                </div>
                <div class="slide-content">
                    <div class="container">
                        <div class="hero-text-area  ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12 mx-auto ">
                                    <h4 class="slide-title" data-splitting="words">
                                        Best Software Development Company To <span class="hollow-text">Innovate
                                            Next</span> Modern Generation</h4>
                                </div>
                                <div class="col-9  col-md-10 col-lg-8 mx-auto ">
                                    <p class="slide-subtitle narrow-centerd-text " data-splitting="words">Fouzdar IT,
                                        provide complete software solutions with 100% clients satisfaction and that’s
                                        why we are one of the best software company in Bangladesh.</p>
                                </div>
                                <div class="col-12 ">
                                    <div class="cta-links-area "><a class=" ma-btn-primary cta-link cta-link-primary  "
                                            href="#0">start now</a><a class=" ma-btn-primary cta-link  "
                                            href="#0">Contact us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--navigation buttons-->
        <div class="swiper-button-prev  wow fadeInUp" data-wow-offset="0" data-wow-delay=".4s">
            <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>
            </div>
        </div>
        <div class="swiper-button-next wow fadeInUp" data-wow-offset="0" data-wow-delay=".4s">
            <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>
            </div>
        </div>
    </div>
</section>
<!-- End  Page hero-->
<!-- Start  services_img-icon_center-aligned-->
<section class="services-boxed  mega-section section-bg-shade">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">Our Solutions & Services</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">We provide digital services based on your
                requirements. Take a look our services and choose your desire one.</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="row gx-4 gy-4 services-row text-center">
            <div class="col-12 col-md-6  col-lg-4 mx-auto ">
                <!--Start First service box-->
                <div class="box service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".1s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-book-open"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">Education System</h3>
                        <p class="service-text">
                            Education Management Software / Attendance / Exam / Accounts / Virtual Classroom / Student
                            Portal
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End First service box   -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto ">
                <!--Start Second service box-->
                <div class="box service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-file-powerpoint"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">ERP Software </h3>
                        <p class="service-text">
                            Business ERP Solution / Garments Payroll / Shop / Product / Company Management
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End Second service box-->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start Third service box-->
                <div class="box service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".3s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-sms"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            Bulk SMS </h3>
                        <p class="service-text">
                            Complete Bulk SMS Service Solution / Quickly Deliver / Large Number of SMS Support / Broad
                            Audience
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End Third service box-->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start fourth service box-->
                <div class="box service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".4s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-shopping-cart"></i></div>

                    <div class="service-content">
                        <h3 class="service-title">
                            eCommerce </h3>
                        <p class="service-text">
                            eCommerce Solution / Multi-store / Multi-vendor Marketplace / Shopping Cart / Inventory /
                            Online Payment
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End fourth service box   -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 5th service box-->
                <div class="box service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".5s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-first-aid"></i></div>

                    <div class="service-content">
                        <h3 class="service-title">
                            Healthcare </h3>
                        <p class="service-text">
                            Advance Hospital Management Software with Website / Pharmacy / Prescription / Doctor
                            Appointment
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 5th service box-->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon far fa-newspaper"></i></div>

                    <div class="service-content">
                        <h3 class="service-title">
                            POS Software </h3>
                        <p class="service-text">
                            POS Solution Software / Inventory / Retail / Sales Purchase / Account & Finance / Customer
                            Management
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="padding-bottom:10px"><img class="img-icon" src="{{asset('frontend/assets/images/services/1.png')}}" alt="service image" draggable="false"/></div>

                    <div class="service-content">
                        <h3 class="service-title">

                            Web Development </h3>
                        <p class="service-text">
                            Web Design And Development / Domain and Hosting / SEO / Content Writing / Digital Marketing
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="padding-bottom:10px"><img class="img-icon" src="{{asset('frontend/assets/images/services/2.png')}}" alt="service image" draggable="false"/></div>

                    <div class="service-content">
                        <h3 class="service-title">


                            Value Added Service </h3>
                        <p class="service-text">
                            Mobile Value Added Service / Standard Voice Calls / Fax Transmissions / Easy to manage
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon fas fa-mobile-alt"></i></div>

                    <div class="service-content">
                        <h3 class="service-title">



                            Call Center </h3>
                        <p class="service-text">
                            Complete Call Center Solution / Virtual Assistance Solution / Digital Support Solution
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="padding-bottom:10px"><img class="img-icon" src="{{asset('frontend/assets/images/services/3.png')}}" alt="service image" draggable="false"/></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            News Portal </h3>
                        <p class="service-text">
                            News / International News / Sports News / Politics / Entertainment / Economics / lifestyle /
                            Education / Information Technology
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="font-size:50px"><i aria-hidden="true" class="elementkit-infobox-icon far fa-newspaper"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            Flexiload Software </h3>
                        <p class="service-text">
                            Mobile Recharge / User-friendly / Real-time Reporting / Security / Multiple Payment Options
                            / Customer Management
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
            <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
                <!--Start 6th service box-->
                <div class="box service-box  wow fadeInUp " data-wow-offset="0" data-wow-delay=".6s">
                    <div class="service-icon" style="padding-bottom:10px"><img class="img-icon" src="{{asset('frontend/assets/images/services/6.png')}}" alt="service image" draggable="false"/></div>
                    <div class="service-content">
                        <h3 class="service-title">
                            Professional Training </h3>
                        <p class="service-text">
                            Machine Learning / Digital Marketing / Graphic Design / Web Development / Game Development /
                            Payroll Software Training
                        </p>
                    </div><a class="read-more" href="service-single.html">read more<i class="fas fa-arrow-right icon ">
                        </i></a>
                </div>
                <!-- End 6th service box  -->
            </div>
        </div>
    </div>
</section>
<!-- End  services_img-icon_center-aligned   -->
<!-- Start  about Section-->
<section class="about mega-section">
    <div class="container">
        <!-- Start first about div-->
        <div class="content-block ">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex align-items-center about-col wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-area     ">
                        <div class="photo-banner-end"><i class="fas fa-pen-nib  icon"></i>
                            <p class="banner-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div><img class="about-img  img-fluid"
                            src="{{asset('frontend/assets/images/about/about-1_photo.png')}}" alt="Our vision">
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center about-col wow fadeInUp" data-wow-delay="0.4s">
                    <div class="text-area "><span class="tag-line">our mision</span>
                        <h2 class=" about-title ">developing your way to success</h2>
                        <p class="about-text ">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit.
                            Distinctio,
                            aliquam est!
                            rerum inventore animi at iusto mollitia nemo reprehenderit

                        </p>
                        <p class="about-text ">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit.
                            Distinctio,
                            aliquam est!
                            rerum inventore animi at iusto mollitia nemo reprehenderit
                            adipisicing elit. Beatae doloremque


                        </p>
                        <div class="info-cards">
                            <div class="crads-items">
                                <div class="row ">
                                    <div class="col-12 col-sm-6  "><a class="info-card-link" href="#0">
                                            <div class="info-card"><i class="fas fa-check  info-card-icon"></i>
                                                <h5 class="info-card-title"> Uniq Experience</h5>
                                            </div>
                                        </a></div>
                                    <div class="col-12 col-sm-6 "><a class="info-card-link" href="#0">
                                            <div class="info-card"><i class="fas fa-check info-card-icon "></i>
                                                <h5 class="info-card-title">growing your success </h5>
                                            </div>
                                        </a></div>
                                    <div class="col-12 col-sm-6  "><a class="info-card-link" href="#0">
                                            <div class="info-card"><i class="fas fa-check  info-card-icon"></i>
                                                <h5 class="info-card-title"> 24/7 fast support</h5>
                                            </div>
                                        </a></div>
                                    <div class="col-12 col-sm-6 "><a class="info-card-link" href="#0">
                                            <div class="info-card"><i class="fas fa-check info-card-icon "></i>
                                                <h5 class="info-card-title">clients trust </h5>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cta-area">
                            <div class="row">
                                <div class="col-12 col-md-6 d-flex align-items-center mb-5 mb-md-0"><a
                                        class=" ma-btn-primary " href="#0">Learn more</a></div>
                                <div class="col-12 col-md-6">
                                    <div class="call-us">
                                        <div class="title"><i class="fas fa-phone icon"> </i><span class="text">Call
                                                us</span></div><a class=" phone " href="tel:+20123456789">(002)
                                            0123456789</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End first about div-->

</section>
<!-- End  about Section-->
<!-- Start  portfolio Section-->
<section class="portfolio portfolio-squared-with-gaps mega-section  section-bg-shade  " id="portfolio">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">a portfolio of our work</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="portfolio-wraper  wow fadeIn" data-wow-delay="0s">
            <!--a menu of links to show the photos users needs   -->
            <ul class="portfolio-btn-list ">
                <li class="portfolio-btn active " data-filter="*">all</li>
                <li class="portfolio-btn        " data-filter=".programming">programming</li>
                <li class="portfolio-btn        " data-filter=".consulting">consulting</li>
                <li class="portfolio-btn        " data-filter=".mobile">mobile app</li>
                <li class="portfolio-btn        " data-filter=".blog">blog</li>
            </ul>
            <div class="portfolio-group ">
                <div class="row g-0">
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item programming">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/1.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/1.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">programming </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">c#</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">Java </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item blog">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/2.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/2.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">blog </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">wordpress</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">bloger </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item programming">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/3.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/3.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">programming </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">c++</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">ruby </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item consulting">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/4.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/4.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">consulting</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">law</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">finance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item blog">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/5.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/5.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">blog</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item mobile">
                        <div class="item"><a class="portfolio-img-link "
                                href="{{asset('frontend/assets/images/portfolio/6.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid "
                                    src="{{asset('frontend/assets/images/portfolio/6.jpg')}}"
                                    alt="portfolio item photo"><i class="fas fa-search icon"></i>
                            </a>
                            <div class="item-info "><span class="info-title">mobile</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">samsung</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">oppo </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area   wow fadeInUp" data-wow-delay="0s"> <a class=" ma-btn-primary " href="#0">see our
                portfolio</a></div>
        <!--End .see-more-area-->
    </div>
</section>
<!-- End  portfolio Section-->
<!-- Start  our-video Section-->
<section class="our-video mega-section" id="our-video">
    <div class="overlay-image-bg   "></div>
    <div class="overlay-color"></div>
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">check out our official video</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="play-wraper  wow fadeInUp" data-wow-delay=".4s">
                    <div class="play-btn-col-dir"><a class="video-link"
                            href="https://www.youtube.com/watch?v=8cN7LWGO-gE" role="button"
                            data-fancybox="data-fancybox">
                            <div class="play-video-btn">
                                <div class="play-btn"> <img class="img-fluid play-icon"
                                        src="{{asset('frontend/assets/images/icons/play-icon.svg')}}" alt="" /></div>
                                <div class="play-btn-text">play now</div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  our-video Section-->
<!-- Start  our-team Section-->
<section class="our-team mega-section d-flex align-items-center" id="our-team">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">our team</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="row">
            <!--first Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.2s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid "
                            src="{{asset('frontend/assets/assets/images/our-team/1.jpg')}}" alt="Team Member 1">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-col sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item" title="Facebook"><a class="sc-link" href="#0"><i
                                                class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item" title="youtube"><a class="sc-link" href="#0"><i
                                                class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item" title="instagram"><a class="sc-link" href="#0"><i
                                                class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item" title="twitter"><a class="sc-link" href="#0"><i
                                                class="fab fa-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name">ahmed Aly</h6><span class="tm-role">web developer</span>
                    </div>
                </div>
            </div>
            <!--Second Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.4s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid "
                            src="{{asset('frontend/assets/images/our-team/2.jpg')}}" alt="Team Member 2">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-col sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item" title="Facebook"><a class="sc-link" href="#0"><i
                                                class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item" title="youtube"><a class="sc-link" href="#0"><i
                                                class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item" title="instagram"><a class="sc-link" href="#0"><i
                                                class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item" title="twitter"><a class="sc-link" href="#0"><i
                                                class="fab fa-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name ">fairouz amin</h6><span class="tm-role">web designer</span>
                    </div>
                </div>
            </div>
            <!--Third Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.6s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid "
                            src="{{asset('frontend/assets/images/our-team/3.jpg')}}" alt="Team Member 3">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-col sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item" title="Facebook"><a class="sc-link" href="#0"><i
                                                class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item" title="youtube"><a class="sc-link" href="#0"><i
                                                class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item" title="instagram"><a class="sc-link" href="#0"><i
                                                class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item" title="twitter"><a class="sc-link" href="#0"><i
                                                class="fab fa-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name">Allan Smith</h6><span class="tm-role">graphic designer</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Start teamsee-more-area-->
        <div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary" href="#0">see all
                team members </a></div>
    </div>
</section>
<!-- End  our-team Section-->
<!-- Start  pricing-3 section-->
<section class="pricing-3 mega-section  section-bg-shade" id="pricing">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">pricing</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="ma-tabs">
            <div class="toggler wow fadeInUp " data-wow-delay="0"><span class=" toggler-label toggle-left   active"
                    data-target=".monthly-plan">monthly </span>
                <input class="toggle-btn" type="checkbox"><span class=" toggler-label toggle-right  "
                    data-target=".yearly-plan">yearly </span>
            </div>
            <div class="tabs">
                <div class="tab-content monthly-plan  visibale-tab">
                    <div class="row">
                        <!--First Plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/1.png')}}" alt="pricing iamge">
                                    </div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>0</p>
                                    <h4 class="plane-name">free plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                        <!--Second-plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/2.png')}}" alt="pricing iamge">
                                    </div>
                                    <div class="ribbon">Most Popular</div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>60</p>
                                    <h4 class="plane-name">business plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                        <!--Third-plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/3.png')}}" alt="pricing iamge">
                                    </div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>96</p>
                                    <h4 class="plane-name">enterprise plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content yearly-plan ">
                    <div class="row">
                        <!--First Plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/1.png')}}" alt="pricing iamge">
                                    </div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>0</p>
                                    <h4 class="plane-name">free plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                        <!--Second-plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/2.png')}}" alt="pricing iamge">
                                    </div>
                                    <div class="ribbon">Most Popular</div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>560</p>
                                    <h4 class="plane-name">business plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                        <!--Third-plan-->
                        <div class="col-12 col-md-9 col-lg-4  mx-auto price-plan ">
                            <div class="plan ">
                                <div class="plan-cost">
                                    <div class="pricing-img icon"><img class="img-fluid"
                                            src="{{asset('frontend/assets/images/pricing/3.png')}}" alt="pricing iamge">
                                    </div>
                                    <p class="plan-price"><sup class="plan-currency">$</sup>1000</p>
                                    <h4 class="plane-name">enterprise plan</h4>
                                </div>
                                <div class="plan-details">
                                    <ul class="plan-list">
                                        <li class="plan-feat ">150 Lorem, ipsum dolor.</li>
                                        <li class="plan-feat ">20 Lorem ipsum dolor sit .</li>
                                        <li class="plan-feat ">Lorem ipsum dolor sit.</li>
                                        <li class="plan-feat ">free Lorem ipsum dolor sit amet.</li>
                                        <li class="plan-feat ">added Lorem ipsum dolor sit .</li>
                                    </ul>
                                </div>
                                <div class="plan-cta"><a class=" ma-btn-primary " href="#0">order now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  pricing-3 section-->
<!-- Start  our-clients Section-->
<section class="our-clients   elf-section" id="our-clients">
    <div class="container">
        <div class="section-heading d-none ">
            <h4 class="section-title ">our great clients</h4>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, architecto
                cupiditate odio rerum est</p>
            <div class="line-gradient-color"> </div>
        </div>
        <div class=" clients-logos d-flex align-items-center justify-content-around flex-wrap">
            <!--Swiper-->
            <div class="swiper-container">
                <div class="swiper-wrapper clients-logo-wraper">
                    <!-- every client logo is located inside div  with clss name "swiper-slide ".
                if you want to add more logos please keep the strcture of the swiper-slide as showen below
                
                
                -->
                    <div class="swiper-slide">
                        <div class="client-logo  wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/1-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/2-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/3-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/4-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/5-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/6-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo wow fadeInUp" data-wow-delay=".2s"><a href="#0"><img
                                    class="img-fluid logo "
                                    src="{{asset('frontend/assets/images/clients-logos/7-white.png')}}" alt=" "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  our-clients Section-->
<!-- Start  testimonials-2-col-->
<section class="testimonials testimonials-2-col d-flex align-items-center mega-section  " id="testimonials">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">testimonials</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="swiper-container  wow fadeInUp  " data-wow-delay="0.4s">
            <div class="swiper-wrapper">
                <!--First Slide-->
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>
                            <div class="content">
                                <p class="testimonial-text ">
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                    ab,
                                    corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.
                                </p>
                            </div>
                        </div>
                        <div class="customer-info "><img class="img-fluid "
                                src="{{asset('frontend/assets/images/testimonials/1.jpg')}}" alt="First Slide ">
                            <div class="customer-details">
                                <p class="customer-name">mhmd Amin</p>
                                <p class="customer-role">manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Second Slide-->
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <div class="customer-testimonial"><i class="fas fa-quote-left    icon "></i>
                            <div class="content">
                                <p class="testimonial-text ">
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                    ab,
                                    corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.
                                </p>
                            </div>
                        </div>
                        <div class="customer-info "><img class="img-fluid "
                                src="{{asset('frontend/assets/images/testimonials/2.jpg')}}" alt="First Slide ">
                            <div class="customer-details">
                                <p class="customer-name">yusuf Amin</p>
                                <p class="customer-role">manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Third Slide-->
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>
                            <div class="content">
                                <p class="testimonial-text ">
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                    ab,
                                    corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.
                                </p>
                            </div>
                        </div>
                        <div class="customer-info "><img class="img-fluid "
                                src="{{asset('frontend/assets/images/testimonials/3.jpg')}}" alt="First Slide ">
                            <div class="customer-details">
                                <p class="customer-name">mostafa Amin</p>
                                <p class="customer-role">manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--navigation buttons-->
            <div class="swiper-button-prev">
                <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>
                </div>
            </div>
            <div class="swiper-button-next">
                <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  testimonials-2-col-->
<!-- Start  faq Section-->
<section class="faq mega-section  section-bg-shade">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">Most asked questions</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>
            <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 ">
                <!--Start Accordion List For FAQ-->
                <div class="faq-accordion  wow fadeInUp " id="accordion" data-wow-delay="0.4s ">
                    <div class="card mb-2">
                        <div class="card-header " id="heading-1">
                            <h5 class="mb-0 faq-title">
                                <button class="btn btn-link  faq-btn   1" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">are
                                    your service easy to use?</button>
                            </h5>
                        </div>
                        <div class="collapse 1 show" id="collapse-1" aria-labelledby="collapse-1"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt
                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                    a
                                    bird on it squid single-origin coffee nulla assumenda
                                    shoreditch
                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header " id="heading-2">
                            <h5 class="mb-0 faq-title">
                                <button class="btn btn-link  faq-btn   2 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">will i
                                    receive future updates?</button>
                            </h5>
                        </div>
                        <div class="collapse 2" id="collapse-2" aria-labelledby="collapse-2"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt
                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                    a
                                    bird on it squid single-origin coffee nulla assumenda
                                    shoreditch
                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header " id="heading-3">
                            <h5 class="mb-0 faq-title">
                                <button class="btn btn-link  faq-btn   3 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">is this
                                    services work in my country?</button>
                            </h5>
                        </div>
                        <div class="collapse 3" id="collapse-3" aria-labelledby="collapse-3"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt
                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                    a
                                    bird on it squid single-origin coffee nulla assumenda
                                    shoreditch
                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header " id="heading-4">
                            <h5 class="mb-0 faq-title">
                                <button class="btn btn-link  faq-btn   4 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">How
                                    much I will pay?</button>
                            </h5>
                        </div>
                        <div class="collapse 4" id="collapse-4" aria-labelledby="collapse-4"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt
                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                    a
                                    bird on it squid single-origin coffee nulla assumenda
                                    shoreditch
                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 ">
                <div class="faq-img wow fadeInUp  " data-wow-delay="0.2s"><img class="img-fluid "
                        src="{{asset('frontend/assets/images/faq/faq_illustration.png')}}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- End  faq Section-->
<!-- Start  take-action Section-->
<section class="take-action elf-section " id="take-action">
    <div class="cta-wrapper">
        <div class="container">
            <div class="row  d-flex align-items-center ">
                <div class="col-12 col-lg-6 ">
                    <div class="section-heading mb-lg-0">
                        <h2 class="section-title   wow" data-splitting="words">subscribe to our newsletter</h2>
                        <p class="section-subtitle wow fadeInUp" data-wow-delay="0.6s">Stay always informed with our
                            special offers,tips, and more.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInUp  " data-wow-delay="0.4s">
                    <div class="form-wrapper">
                        <form class="email-capture-form">
                            <input class="captured-email " id="captured-email" type="email"
                                placeholder="Enter Your Email" required>
                            <button class="  subscripe-btn abs" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  take-action Section-->
@endsection