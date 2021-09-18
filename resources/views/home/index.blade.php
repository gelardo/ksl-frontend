@extends('layout.app')
@section('content')
    <!--banner section start-->
    <section class="section">
        <div class="container">
            <div class="row m-0 p-0 d-flex justify-content-lg-around">
                <div class="col-lg-5 col-12 p-0 my-lg-4 py-lg-3">

                    <div class="d-flex justify-content-lg-start justify-content-center mt-lg-5 pt-lg-5">
                        <p class="first-title">Invest In</p>

                        <div class="swiper-container swiper-container-custom b-slide">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <p class="first-title-slide ms-2">Stock</p>
                                </div>

                                <div class="swiper-slide">
                                    <p class="first-title-slide ms-2">KSL</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card trec-card border-0 m-0 rounded px-3 py-1">
                        <p class="text-lg-start text-center m-0">TREC holder of Dhaka & Chattogram Stock Exchange Limited.</p>
                    </div>

                    <div class="mt-3 text-lg-start text-center">
                        <div class="swiper-container swiper-container-custom b-slide1">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <p class="banner-slider-des">One of the leading stock broker in Bangladesh.</p>
                                </div>

                                <div class="swiper-slide">
                                    <p class="banner-slider-des">We are fully equipped with smart technologies.</p>
                                </div>

                                <div class="swiper-slide">
                                    <p class="banner-slider-des">94000+ Clients feel safe trading with us.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-lg-start justify-content-center mt-md-4 mt-2">
                        <a href="{{url('getstarted')}}" class=" btn login-btn shadow-sm rounded-pill px-4 py-2" type="login button ">Start Investing</a>
                    </div>

                </div>
                <div class="col-lg-5 col-12 p-0 my-lg-5 py-lg-4  mt-md-0 mt-4">
                    <div id="video-laptop1">
                        <video class="rounded" autoplay loop muted>
                            <source src="{{asset('assets/videos/about.mp4')}}" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner section end-->

    <!--Introducing app web start-->
    <section class="app-bg d-lg-block d-none">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-12">
                    <div class="card trec-card border-0 m-0 rounded px-2 py-1">
                        <p class="text-center m-0">Multi-platform mobile phone trading application.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-start align-items-center mt-3">
                <div class="col-2 custom-col position-relative h-100">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-end">
                                <h4 class="p-3">Learn</h4>
                            </div>

                            <div class="swiper-slide text-end">
                                <h4 class="p-3">Manage</h4>
                            </div>

                            <div class="swiper-slide text-end">
                                <h4 class="p-3">Customize</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next position-absolute bottom-0"></div>
                    <div class="swiper-button-prev position-absolute top-0"></div>
                </div>

                <div class="col-10 custom-col">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/app-img.png')}}" class="rounded h-100" alt="..." />
                                <div class="ms-5 ps-5">
                                    <p class="first-title-iapp">Learn As You Grow</p>
                                    <p class="iapp-des">Our goal is to make investing in financial markets more affordable, more intuitive, and more fun, no matter how much experience you have (or don’t have).</p>
                                </div>

                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/app-img-1.png')}}" class="rounded h-100" alt="..." />
                                <div class="ms-5 ps-5">
                                    <p class="first-title-iapp">Manage Your Portfolio</p>
                                    <p class="iapp-des">Keep your portfolio in your pocket. Everything you need to manage your assets is available in a single app.</p>
                                </div>

                            </div>
                            <div class="swiper-slide d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/app-img-2.png')}}" class="rounded h-100" alt="..." />
                                <div class="ms-5 ps-5">
                                    <p class="first-title-iapp">Keep Tabs on Your Money</p>
                                    <p class="iapp-des">Set up customized news and notifications to stay on top of your assets as casually or as relentlessly as you like. Controlling the flow of info is up to you.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Introducing app web end  -->

    <!--Introducing app mobile start-->
    <section class="app-bg d-lg-none d-block">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-4 col-12">
                    <div class="card trec-card border-0 m-0 rounded px-2 py-1">
                        <p class="text-center m-0">Multi-platform mobile phone trading application.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 custom-col">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <img src="{{asset('assets/app-img.png')}}" class="rounded h-75 ms-5 ps-4" alt="..." />
                            <div class="text-center">
                                <p class="first-title-iapp mt-2">Learn As You Grow</p>
                                <p class="iapp-des">Our goal is to make investing in financial markets more affordable, more intuitive, and more fun, no matter how much experience you have (or don’t have).</p>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/app-img-1.png')}}" class="rounded h-75 ms-5 ps-4" alt="..." />
                            <div class="text-center">
                                <p class="first-title-iapp mt-2">Manage Your Portfolio</p>
                                <p class="iapp-des">Keep your portfolio in your pocket. Everything you need to manage your assets is available in a single app.</p>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/app-img-2.png')}}" class="rounded h-75 ms-5 ps-4" alt="..." />
                            <div class="text-center">
                                <p class="first-title-iapp mt-2">Keep Tabs on Your Money</p>
                                <p class="iapp-des">Set up customized news and notifications to stay on top of your assets as casually or as relentlessly as you like. Controlling the flow of info is up to you.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Introducing app mobile end  -->

    <!--DSE & CSE stock information start-->
    <div class="container custom-placement">
        <div class="row">
            <div class="col-lg-12 col-12 mt-3" >
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/CSE.svg')}}" class="img-size" alt="...">
                </div>
                <div class="card table-card rounded mt-lg-3 mt-2 shadow-sm">
                    <div class="card-body" id="cse-data-main">

                        <table id="example2" class="table table-hover " style="width: 100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company</th>
                                <th>LTP</th>
                                <th>Open</th>
                                <th>HIGH</th>
                                <th>LOW</th>
                                <th>YCP</th>
                                <th>Trade</th>
                                <th>Value</th>
                                <th>Volume</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12 mt-3" >
                <div class="d-flex justify-content-center">
                    <img src="{{asset('assets/DSE.svg')}}" class="img-size" alt="...">
                </div>
                <div class="card table-card rounded mt-lg-3 mt-2 shadow-sm">
                    <div class="card-body " id="dse-data-main">

                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company</th>
                                <th>LTP</th>
                                <th>HIGH</th>
                                <th>LOW</th>
                                <th>YCP</th>
                                <th>Close Price</th>
                                <th>Trade</th>
                                <th>Change</th>
                                <th>Volume</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--DSE & CSE stock information end-->

    <!--market mover start-->
    <div class="container custom-placement1">
        <p class="mm-title text-uppercase d-flex justify-content-center m-0" >DSE Market Mover</p>
        <div class="card table-card rounded mt-2 shadow-sm" data-aos="fade-up" data-aos-duration="800">
            <div class="card-body">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-gainer-tab" data-bs-toggle="tab" data-bs-target="#nav-gainer" type="button" role="tab" aria-controls="nav-gainer" aria-selected="true">Gainer</button>
                        <button class="nav-link" id="nav-loser-tab" data-bs-toggle="tab" data-bs-target="#nav-loser" type="button" role="tab" aria-controls="nav-loser" aria-selected="false">Loser</button>
                        <button class="nav-link" id="nav-taka-tab" data-bs-toggle="tab" data-bs-target="#nav-taka" type="button" role="tab" aria-controls="nav-taka" aria-selected="false">All</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-gainer" role="tabpanel" aria-labelledby="nav-gainer-tab">

                        <table  id="taka-table-gainer" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT	</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                                <th scope="col">Volume</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="nav-loser" role="tabpane2" aria-labelledby="nav-loser-tab">
                        <table  id="taka-table-loser" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT	</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                                <th scope="col">Volume</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-taka" role="tabpane3" aria-labelledby="nav-taka-tab">
                        <table id="taka-table-all" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT	</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                                <th scope="col">Volume</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--market mover end-->

    <!--market mover start-->
    <div class="container custom-placement1">
        <p class="mm-title text-uppercase d-flex justify-content-center m-0" >CSE Market Mover</p>
        <div class="card table-card rounded mt-2 shadow-sm" data-aos="fade-up" data-aos-duration="800">
            <div class="card-body">

                <nav>
                    <div class="nav nav-tabs" id="cse-nav-tab" role="tablist">
                        <button class="nav-link active" id="cse-nav-gainer-tab" data-bs-toggle="tab" data-bs-target="#cse-nav-gainer" type="button" role="tab" aria-controls="cse-nav-gainer" aria-selected="true">Gainer</button>
                        <button class="nav-link" id="cse-nav-loser-tab" data-bs-toggle="tab" data-bs-target="#cse-nav-loser" type="button" role="tab" aria-controls="cse-nav-loser" aria-selected="false">Loser</button>
                        <button class="nav-link" id="cse-nav-taka-tab" data-bs-toggle="tab" data-bs-target="#cse-nav-taka" type="button" role="tab" aria-controls="cse-nav-taka" aria-selected="false">All</button>
                    </div>
                </nav>
                <div class="tab-content" id="cse-nav-tabContent">
                    <div class="tab-pane fade show active" id="cse-nav-gainer" role="tabpanel" aria-labelledby="cse-nav-gainer-tab">

                        <table  id="cse-taka-table-gainer" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="cse-nav-loser" role="tabpane2" aria-labelledby="cse-nav-loser-tab">
                        <table  id="cse-taka-table-loser" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT	</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="cse-nav-taka" role="tabpane3" aria-labelledby="cse-nav-taka-tab">
                        <table id="cse-taka-table-all" class="table table-hover mt-2">
                            <thead>
                            <tr>
                                <th scope="col">INSTRUMENT	</th>
                                <th scope="col">LTP</th>
                                <th scope="col">%Change</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--market mover end-->

    <!--Service area star-->
    <!--title start-->
    <section class="bg-color-ipo pb-4 pt-2 custom-margin-s">
        <div class="container py-3">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-md-5 col-12">
                    <img width="100%" src="{{ asset('assets/Investment data-rafiki.png') }}" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <div class="">
                        <div class="card card-body product-card p-1 px-3 bg-transparent border-1 rounded-pill">
                            <p class="m-0">Our Products</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3" data-aos="zoom-in-down" data-aos-duration="500">
                        <h3 class="m-0 s-line-height">Serving you with fully automated desktop and mobile trading applications.</h3>
                    </div>
                    <div class="d-flex mt-3" data-aos="fade" data-aos-duration="800">
                        <img src="{{asset('assets/bar.svg')}}" class="bar" alt="..." />
                    </div>
                    <!--title end-->
                    <div class="row m-0 p-0 mt-md-4 mt-3">
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="podium-outline"></ion-icon>
                            <h5 class="card-title">BROKERAGE</h5>
                            <p class="s-card-des">Brokerage services on securities being traded on the Chittagong Stock Exchange Limited</p>

                        </div>
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="prism-outline"></ion-icon>
                            <h5 class="card-title">DP</h5>=
                            <p class="s-card-des">We are a depository participant at Central Depository Bangladesh Ltd. with all the services.</p>

                        </div>
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="send-outline"></ion-icon>
                            <h5 class="card-title">EFT/BEFTN</h5>
                            <p class="s-card-des">Integrated into the BEFTN (Bangladesh Electronic Fund Transfer Network) easily.</p>

                        </div>
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="server-outline"></ion-icon>
                            <h5 class="card-title">IPO APPLICATION</h5>
                            <p class="s-card-des">IPO application support by our devoted customer support executives</p>

                        </div>
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="sparkles-outline"></ion-icon>
                            <h5 class="card-title">ITS</h5>
                            <p class="s-card-des">No matter where you are, you can always stay connected with the market using Internet trading.</p>

                        </div>
                        <div class="col-md-4 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="receipt-outline"></ion-icon>
                            <h5 class="card-title">MARGIN LOAN</h5>
                            <p class="s-card-des">KSL very carefully provides margin loan facility to only a few of its selective clients.</p>

                        </div>

                        <div class="col-md-12 col-12 my-2" data-aos="zoom-in-up" data-aos-duration="500">

                            <ion-icon name="reader-outline"></ion-icon>
                            <h5 class="card-title">RESEARCH & DEVELOPMENT</h5>
                            <p class="s-card-des">KSL very carefully provides margin loan facility to only a few of its selective clients.</p>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service area end-->

    <!--powerful platform start-->
    <div class="container custom-margin">

        <div class="text-center" data-aos="zoom-in-down" data-aos-duration="500">
            <p class="pp-heading">Powerful platform for easy investing.</p>
        </div>

        <div class="row d-flex justify-content-center mt-md-5 mt-4 pt-md-4 pt-3">
            <div class="col-md-3 col-12" data-aos="zoom-in-down" data-aos-duration="800">
                <div class="d-flex justify-content-center">
                    <div class="card rounded p-4 border-0 d-flex justify-content-center align-items-center">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="pp-title">Digital account opening</p>
                    <p class="">Paperless and hassle-free account opening process.</p>
                </div>
            </div>
            <div class="col-md-3 col-12" data-aos="zoom-in-down" data-aos-duration="800">
                <div class="d-flex justify-content-center">
                    <div class="card rounded p-4 border-0 d-flex justify-content-center align-items-center">
                        <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="pp-title">Informed & intuitive investing</p>
                    <p class="">Charts, financial data, news to help you make better decisions.</p>
                </div>
            </div>
            <div class="col-md-3 col-12" data-aos="zoom-in-down" data-aos-duration="800">
                <div class="d-flex justify-content-center">
                    <div class="card rounded p-4 border-0 d-flex justify-content-center align-items-center">
                        <ion-icon name="shield-half-outline"></ion-icon>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="pp-title">Fast & secure</p>
                    <p class="">Comprehensive 2FA authentication.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-md-5 mt-4" data-aos="zoom-in-down" data-aos-duration="500">
            <div class="col-md-2 col-6">
                <a href="" class="text-decoration-none">
                    <div class="card link-card border-1 rounded d-flex justify-content-center align-items-center">
                        <img src="{{asset('assets/playstore.png')}}" class="w-100 rounded" alt="..." />
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="" class="text-decoration-none">
                    <div class="card link-card border-1 rounded d-flex justify-content-center align-items-center">
                        <img src="{{asset('assets/app-store.png')}}" class="w-100 rounded" alt="..." />
                    </div>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-md-5 mt-4">
            <ul class="nav nav-tab mb-3" id="tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link about-tab" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="true">Order & Management</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link board-tab active" id="graphs-tab" data-bs-toggle="tab" data-bs-target="#graphs" type="button" role="tab" aria-controls="graphs" aria-selected="false">Graphs</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link people-tab" id="fundamental-tab" data-bs-toggle="tab" data-bs-target="#fundamental" type="button" role="tab" aria-controls="fundamental" aria-selected="false">Fundamental Information</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="tabContent">

            <div class="tab-pane fade m-0 p-0 mt-md-5 mt-4" id="order" role="tabpanel" aria-labelledby="order-tab">

                <div class="row d-flex justify-content-center" data-aos="zoom-in-down" data-aos-duration="800">
                    <div class="col-md-10 col-12">
                        <div id="video-laptop">
                            <video class="" autoplay loop muted>
                                <source src="{{asset('assets/videos/about.mp4')}}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade show active m-0 p-0 mt-md-5 mt-4" id="graphs" role="tabpanel" aria-labelledby="graphs-tab">

                <div class="row d-flex justify-content-center" data-aos="zoom-in-down" data-aos-duration="800">
                    <div class="col-md-10 col-12">
                        <div id="video-laptop">
                            <video class="" autoplay loop muted>
                                <source src="{{asset('assets/videos/about.mp4')}}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade m-0 p-0 mt-md-5 mt-4" id="fundamental" role="tabpanel" aria-labelledby="fundamental-tab">

                <div class="row d-flex justify-content-center" data-aos="zoom-in-down" data-aos-duration="800">
                    <div class="col-md-10 col-12">
                        <div id="video-laptop">
                            <video class="" autoplay loop muted>
                                <source src="{{asset('assets/videos/about.mp4')}}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--powerful platform end-->

    <!--counter start-->
    <div class="container-fluid custom-margin">
        <section class="counter-banner rounded p-lg-5 p-md-4 p-3">
            <div class="container counter-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-2" data-aos="fade-up" data-aos-duration="800">
                        <div class="card rounded counter-card">
                            <div class="card-body text-center">
                                <div class="mb-2"><i class="far fa-smile"></i></div>
                                <div class="counter counter-size">94000</div>
                                <div class="name-size">Number of active Investors</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-2" data-aos="fade-down" data-aos-duration="500">
                        <div class="card rounded counter-card">
                            <div class="card-body text-center">
                                <div class="mb-2"><i class="fas fa-anchor"></i></div>
                                <div class="counter counter-size">16</div>
                                <div class="name-size">Years of Experience</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-2" data-aos="fade-up" data-aos-duration="800">
                        <div class="card rounded counter-card">
                            <div class="card-body text-center">
                                <div class="mb-2"><i class="fas fa-chart-line"></i></div>
                                <div class="counter counter-size">6</div>
                                <div class="name-size">Branches & Booth Offices</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-2" data-aos="fade-down" data-aos-duration="500">
                        <div class="card rounded counter-card">
                            <div class="card-body text-center">
                                <div class="mb-2"><i class="fas fa-award"></i></div>
                                <div class="counter counter-size">199</div>
                                <div class="name-size">Awards Received</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--counter end-->

    <!-- awwards area start -->
    <section class="bg-color-ipo pb-3 mt-md-5 mt-4">
        <div class="container pt-4">

            <h2 class="award-title">Acheivements</h2>

            <div class="variable-width">

                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 7th in 2018</p>
                </div>
                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 4th in 2017</p>
                </div>
                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 3rd in 2016</p>
                </div>
                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 4th in 2015</p>
                </div>
                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 3rd in 2014</p>
                </div>
                <div class="text-center m-3">
                    <i class="fas fa-award"></i>
                    <p class="award-des pt-2">Awarded 4th in 2013</p>
                </div>

            </div>

        </div>
    </section>
    <!-- awwards area ends -->

    <!--get started start-->
    <div class="container-fluid mt-md-5 mt-4">
        <section class="gs-banner rounded" data-aos="zoom-in-down" data-aos-duration="800">
            <div class="row d-flex justify-content-center"></div>
            <div class="container">
                <p class="gs-text">Accept & Disburse Every Payment Quickly, <br>Easily & Securely.</p>
                <div class="mt-md-4 mt-3">
                    <a href="{{url('/getstarted')}}" target="" class="about-btn rounded-pill px-4 py-2 shadow-sm">Get Started Today</a>
                </div>
            </div>
        </section>
    </div>
    <!--get started end-->
@endsection
