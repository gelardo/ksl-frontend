@extends('layout.app')
@section('content')

    <!--Who we are content start-->
    <div class="container">
        <section class="">
            <div class="d-flex justify-content-center mt-md-5 mt-4">
                <ul class="nav nav-tab mb-3" id="tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link about-tab" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">About Us</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link board-tab active" id="board-tab" data-bs-toggle="tab" data-bs-target="#board" type="button" role="tab" aria-controls="board" aria-selected="false">Board of directors</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link people-tab" id="people-tab" data-bs-toggle="tab" data-bs-target="#people" type="button" role="tab" aria-controls="people" aria-selected="false">Our People</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="tabContent">
                <!--about Us start-->
                <div class="tab-pane fade m-0 p-0 mt-md-5 mt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <!--banner content start-->
                    <div class="container m-0 p-0">
                        <div class="about-con text-center animate__animated animate__slideInUp">
                            <p class="about-first-title">We’re on a mission to <br>democratize finance for all.</p>
                            <p class="about-banner-des mt-md-5 mt-3">At Our Markets, our values are in service of our customers. We strive to uphold our values every day.</p>
                        </div>
                    </div>
                    <!--banner content end-->

                    <!--about us start-->
                    <div class="container m-0 p-0 mt-md-5 mt-4 pt-3">
                        <!-- title -->
                        <div class="about-con">
                            <p class="about-first-title text-uppercase text-center">Kabir Securities Limited</p>
                        </div>
                        <div class="mt-3" data-aos="fade-down" data-aos-duration="800">
                            <p class="text-center about-des">Kabir Securities Limited (popularly known as “KSL”) is one of the renowned brokerage houses in the capital market of Bangladesh. The company, being the 56th TREC Holder of the Chittagong Stock Exchange Limited, is operating
                                its operation since 2005 with reputation parallel to only the top houses of Bangladesh. Our highly secured and smart transaction process supported by smooth workflow and top notch customer support has helped us gain the
                                unprecedented popularity in such short time.
                            </p>
                            <p class="text-center about-des">The company is authorized and regulated by the Bangladesh Securities and Exchange Commission (BSEC), and a Full Service Depository Participant of Central Depository Bangladesh Limited (CDBL). It was incorporated as a private
                                limited company on April 20, 2005 and commenced its operation on July, 2005. The principal activity of the company is to provide all kind of stock brokerage services to its clients. KSL also manages its own portfolio under
                                stock dealer license.
                            </p>
                        </div>
                    </div>

                    <div class="container m-0 p-0 mt-5">
                        <div class="card rounded s-card shadow-sm" data-aos="zoom-in-down" data-aos-duration="400">
                            <div class="card-body">
                                <section class="about-section-bg">
                                    <div class="row">
                                        <div class="col-md-6 col-12 pt-2" data-aos="fade-up" data-aos-duration="800">
                                            <p class="about-sub-title">Organizational Goals and Objectives</p>
                                            <p class="text-justify about-des">The goals of Kabir Securities Limited are two fold – official and operative. Kabir Securities Limited have set its prime goal to achieve a rapport with clients that shines client satisfaction. Besides the client
                                                satisfaction, key goals of Kabir Securities Limited are:</p>
                                            <p class="about-des1 text-lg-start text-center">Market Share in Brokerage Industry service area</p>
                                            <p class="about-des1 text-lg-start text-center">Research, Innovation</p>
                                            <p class="about-des1 text-lg-start text-center">Human Resource Development</p>
                                            <p class="about-des1 text-lg-start text-center">Financial Strength</p>
                                            <p class="about-des1 text-lg-start text-center">Management Performance Improvement</p>
                                            <p class="about-des1 text-lg-start text-center">Corporate Social Responsibility</p>
                                        </div>
                                        <div class="col-md-6 col-12 pt-2" data-aos="fade-up">
                                            <p class="about-sub-title">Vision</p>
                                            <p class="text-justify about-des">We want to be the most investor driven brokerage house in Bangladesh and we shall turn every people into smart investors.</p>
                                            <p class="about-sub-title">Mission</p>
                                            <p class="text-justify about-des">We want one thing for our customers – satisfaction.</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--about us end-->

                    <!--ferature card start-->
                    <div class="container responsive1 custom-margin">
                        <div class="card feature-card rounded m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <p class="feature-title text-uppercase">Safety First</p>
                                <p class="feature-des text-truncate">We are a safety-first company</p>
                                <img src="assets/feature.png" class="news-img" alt="...">
                                <div class="text-end">
                                    <i class="far fa-plus-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card feature-card1 rounded m-1" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                            <div class="card-body">
                                <p class="feature-title1 text-uppercase">Participation is Power</p>
                                <p class="feature-des1 text-truncate">Here, the rich don't get a better deal</p>
                                <img src="assets/feature1.png" class="news-img" alt="...">
                                <div class="text-end">
                                    <i class="far fa-plus-square"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card feature-card2 rounded m-1" data-bs-toggle="modal" data-bs-target="#exampleModa3">
                            <div class="card-body">
                                <p class="feature-title2 text-uppercase">Radical Customer Focus</p>
                                <p class="feature-des2 text-truncate">We exist to make our customers happy</p>
                                <img src="assets/feature2.png" class="news-img" alt="...">
                                <div class="text-end">
                                    <i class="far fa-plus-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature card end-->

                    <!-- Modal start-->
                    <div class="modal" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                            <div class="modal-content feature-card rounded">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase feature-title" id="exampleModalLabel">Safety First</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="mb-5">
                                        <img src="assets/feature.png" class="feature-modal-img" alt="...">
                                    </div>
                                    <p class="feature-des">We are a safety-first company</p>
                                    <p>The reliability of our platform takes precedence over all else, so that we can be there for our customers when they need us the most. We relentlessly protect our customers’ security and privacy, and we only share with
                                        our counterparties what they need to fulfill our customers’ financial needs, nothing more.</p>
                                    <p>We build safeguards and provide education so that our customers are in the best position to succeed. We have high quality timely customer support, and when things aren’t right, we fix them. We work closely with regulators
                                        and lawmakers to protect our customers and the broader financial system.</p>
                                    <p>We speak simply, plainly, and truthfully, even if it’s not what others want to hear. We hold ourselves and our colleagues to the highest ethical standards.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal" id="exampleModa2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                            <div class="modal-content feature-card1 rounded">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase feature-title1" id="exampleModalLabel">Participation is Power</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="mb-5">
                                        <img src="assets/feature1.png" class="feature-modal-img" alt="...">
                                    </div>
                                    <p class="feature-des1">Here, the rich don't get a better deal</p>
                                    <p>We founded KSL in the wake of the financial crisis because we identified a gap - the more you had, the better deal you got.</p>
                                    <p>We aim to give everyone access to the financial system, regardless of their background or bank account balance. That’s why we have uniform interest rates, no account minimums, and a product that was designed from the
                                        ground up for small accounts.</p>
                                    <p>We would rather serve many small customers over a few large ones. We reflect the world around us, and we elevate and embrace all voices so everyone feels at home at KSL.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal" id="exampleModa3" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                            <div class="modal-content feature-card2 rounded">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase feature-title2" id="exampleModalLabel">Radical Customer Focus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="mb-5">
                                        <img src="assets/feature2.png" class="feature-modal-img" alt="...">
                                    </div>
                                    <p class="feature-des2">We exist to make our customers happy</p>
                                    <p>We have prioritized getting direct customer feedback on what we were building. Talking to our customers forms the kernel of the product development process we have today. We listen with empathy, ask questions, and critically
                                        evaluate our work by how valuable our customers find it.</p>
                                    <p>We never stop asking how we can make our product better, and we never settle for ‘good enough’. We listen to our colleagues, and we start from a place of believing they are capable and well-intentioned.</p>
                                    <p>We delight our customers and take pride in our work. Otherwise, why even be here?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal end-->

                    <!--KEY STRENGTH start-->
                    <div class="container p-0 custom-margin">
                        <div class="card rounded s-card shadow-sm" data-aos="zoom-in-up" data-aos-duration="500">
                            <div class="card-body">
                                <section class="about-section-bg">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="about-sub-title">KEY STRENGTH</p>
                                            <p class="text-justify about-des">We measure our Strengths by metering our Weaknesses, evaluating Opportunities and combating Threats.</p>
                                        </div>
                                        <div class="col-md-6 col-12 pt-2" data-aos="fade-up" data-aos-duration="800">
                                            <p class="about-sub-title">Organizational Strength</p>
                                            <p class="text-justify about-des">As a matter of fact, our organizational strength comprises of</p>
                                            <p class="about-des1 text-lg-start text-center">Client Satisfaction.</p>
                                            <p class="about-des1 text-lg-start text-center">Knowledge and Expertise</p>
                                            <p class="about-des1 text-lg-start text-center">Business Process Optimization</p>
                                            <p class="about-des1 text-lg-start text-center">Products and Services</p>
                                            <p class="about-des1 text-lg-start text-center">Relationships</p>
                                            <p class="about-des1 text-lg-start text-center">Humanresources</p>
                                            <p class="about-des1 text-lg-start text-center">Asset Development</p>
                                        </div>
                                        <div class="col-md-6 col-12 pt-2" data-aos="fade-up">
                                            <p class="about-sub-title">Applications Training Capability</p>
                                            <p class="text-justify about-des">Our operating strengths lies in our service innovation. This includes</p>
                                            <p class="about-des1 text-lg-start text-center">Management and Information Systems Integration.</p>
                                            <p class="about-des1 text-lg-start text-center">Embedded Information Technology Infrastructure</p>
                                            <p class="about-des1 text-lg-start text-center">Online IPO Services</p>
                                            <p class="about-des1 text-lg-start text-center">Online Trading System</p>
                                            <p class="about-des1 text-lg-start text-center">Strong Leaderships from the Chairman and Managing Director</p>
                                            <p class="about-des1 text-lg-start text-center">Dedicated Management and Executive Teams</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--KEY STRENGTH end-->

                </div>
                <!--about Us end-->

                <!--Board of derectors start-->
                <div class="tab-pane fade show active" id="board" role="tabpane2" aria-labelledby="board-tab">
                    <!--derectors start-->
                    <div class="container p-0 mt-md-5 mt-4">
                        <div class="row">
                            <div class="col-md-6 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                <img src="assets/founder.png" class="founder-img rounded" alt="...">
                            </div>
                            <div class="col-md-6 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                <div class="card about-card rounded border-0 h-100">
                                    <section class="founder-section-bg">
                                        <div class="card-body">
                                            <p class="founder-title text-lg-start text-center m-0">MOHAMMED ALAMGIR KABIR</p>
                                            <p class="text-uppercase text-lg-start text-center about-founder-des m-0 mb-2">MANAGING DIRECTOR</p>
                                            <p class="text-justify founder-des">We take pride in being one of the pioneer Stock Broker Companies in Bangladesh having achieved remarkable growth over the last twelve years and contributing significantly to the development of market of Bangladesh.
                                                The Company has attained prominence as a leader in the field of Stock Broker business through competence, competitiveness and attaining with highest quality services to its Clients. We have a long tradition
                                                of serving our valued customers to their complete satisfaction through efficient management and excellent workmanship, which we continue to maintain with our untiring efforts.</p>
                                            <p class="text-justify founder-des">In an era of modern technologies and new techniques, we continuously strive for innovation and enhanced efficiency.</p>
                                            <p class="text-justify founder-des">As we look to the years ahead we introduced competitive products to remain committed to excellence, keep abreast of changes and innovations, adopt better management and successfully overcome all challenges before
                                                us.
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--derectors end-->
                    <!--derectors start-->
                    <div class="container p-0 custom-margin">
                        <div class="row">
                            <div class="col-md-6 col-12 d-md-none d-block" data-aos="zoom-in-down" data-aos-duration="1000">
                                <img src="assets/founder.png" class="founder-img rounded" alt="...">
                            </div>
                            <div class="col-md-6 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                <div class="card about-card rounded border-0 h-100">
                                    <section class="founder-section-bg">
                                        <div class="card-body">
                                            <p class="founder-title text-lg-start text-center m-0">MOHAMMED ALAMGIR KABIR</p>
                                            <p class="text-uppercase text-lg-start text-center about-founder-des m-0 mb-2">MANAGING DIRECTOR</p>
                                            <p class="text-justify founder-des">We take pride in being one of the pioneer Stock Broker Companies in Bangladesh having achieved remarkable growth over the last twelve years and contributing significantly to the development of market of Bangladesh.
                                                The Company has attained prominence as a leader in the field of Stock Broker business through competence, competitiveness and attaining with highest quality services to its Clients. We have a long tradition
                                                of serving our valued customers to their complete satisfaction through efficient management and excellent workmanship, which we continue to maintain with our untiring efforts.</p>
                                            <p class="text-justify founder-des">In an era of modern technologies and new techniques, we continuously strive for innovation and enhanced efficiency.</p>
                                            <p class="text-justify founder-des">As we look to the years ahead we introduced competitive products to remain committed to excellence, keep abreast of changes and innovations, adopt better management and successfully overcome all challenges before
                                                us.
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 d-md-block d-none" data-aos="zoom-in-down" data-aos-duration="1000">
                                <img src="assets/founder.png" class="founder-img rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <!--derectors end-->
                </div>
                <!--Board of derectors end-->

                <!--Our people start-->
                <div class="tab-pane fade" id="people" role="tabpane3" aria-labelledby="people-tab">
                    <div class="container mt-md-5 mt-4">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-2 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <img src="assets/dgm.jpg" class="our-people-img rounded" alt="...">
                                    </div>
                                    <div class="col-md-10 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <div class="card about-card rounded border-0 h-100">
                                            <section class="">
                                                <div class="card-body">
                                                    <p class="our-people-title text-md-start text-center m-0">MD. ANOWAR SHADAT</p>
                                                    <p class="text-md-start text-center our-people-des m-0 mb-2">DGM, Head of Compliance, Head of Business Development</p>
                                                    <p class="text-justify founder-des">DGM, Head of Compliance, Head of Business Development, He started his career in Abul khair group. Before KSL, Mr. Shadat was with KDS Group and then he was COO in Be Rich Limited (TREC holder of CSE
                                                        for long 12 years of his career. He was the senior manager of Business Development Department (Head of the Department) in Lankabangla Securities Ltd. just before KSL. He Completed his M.COM. in Accounting
                                                        from National University and MBA in Finance from premier University Bangladesh.</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-md-2 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <img src="assets/op.jpg" class="our-people-img rounded" alt="...">
                                    </div>
                                    <div class="col-md-10 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <div class="card about-card rounded border-0 h-100">
                                            <section class="">
                                                <div class="card-body">
                                                    <p class="our-people-title text-md-start text-center m-0">MD. MOYENUDDIN SOHEL</p>
                                                    <p class="text-md-start text-center our-people-des m-0 mb-2">AGM & Head of Operations</p>
                                                    <p class="text-justify founder-des">Mr. Sohel has joined Kabir Securities Limited in March 2017. He has started his stock market profession in MSL in December 2006 and promoted as the Head of Branch Control & Trade in 2009. He is a well
                                                        known share market analyst, successful portfolio manager and a visionary team leader.</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-md-2 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <img src="assets/fin.jpg" class="our-people-img rounded" alt="...">
                                    </div>
                                    <div class="col-md-10 col-12" data-aos="zoom-in-down" data-aos-duration="1000">
                                        <div class="card about-card rounded border-0 h-100">
                                            <section class="">
                                                <div class="card-body">
                                                    <p class="our-people-title text-md-start text-center m-0">ALAUDDIN BHUIYAN</p>
                                                    <p class="text-md-start text-center our-people-des m-0 mb-2">AGM & Head of finance</p>
                                                    <p class="text-justify founder-des">Mr. Alauddin Bhuiyan has joined KSL in October 2010. He has a long working experience in Accounts and Finance department in different organizations. He started his career from Sonic Electronics and gradually
                                                        earned diversified experience while working with Akij Group of Companies and GrameenPhone Limited. He has taken up several successful training and workshop held locally on career management and leadership.</p>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Our people end-->
            </div>
        </section>
    </div>
    <!--Who we are content end-->



@endsection
