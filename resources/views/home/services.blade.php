@extends('layout.app')
@section('content')
    <!--Body content start-->
    <div class="container">
        <section class="">
            <div class="d-flex justify-content-center mt-md-5 mt-4">
                <ul class="nav nav-tab mb-3" id="tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link about-tab active" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="true">Services</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link board-tab" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Account Types</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="tabContent">
                <!--Services start-->
                <div class="tab-pane fade show active m-0 p-0 mt-md-5 mt-4" id="services" role="tabpanel" aria-labelledby="services-tab">
                    <!--banner content start-->
                    <div class="container m-0 p-0">

                        <div class="about-con text-center animate__animated animate__slideInUp">
                            <p class="about-first-title">Services we provide</p>
                            <p class="about-banner-des mt-md-4 mt-3">At Our Markets, our values are in service of our customers. We strive to uphold our values every day.</p>
                        </div>
                    </div>
                    <!--banner content end-->
                    <!--services content start-->
                    <!--trading start-->
                    <div class="col-12 mt-md-5 mt-4" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/trading-icon.svg" class="s-icon" alt="...">Trading</p>
                    </div>
                    <div class="card rounded s-card shadow-sm" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card-body">
                            <section class="s-trading-bg">
                                <div class="row">
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="text-justify about-des">Brokerage services on securities being traded on the Chittagong Stock Exchange Limited. We ensures sound trading environment at it’s trading premises. Kabir Securities Limited has trained professional executives
                                            to execute the buy/sale order in a prompt manner. Clients enjoy the luxury of:</p>
                                        <p class="about-des1 text-lg-start text-center">Internet Order/Trading</p>
                                        <p class="about-des1 text-lg-start text-center">Floor Order/Trading</p>
                                        <p class="about-des1 text-lg-start text-center">Telephonic Order/Trading</p>
                                        <p class="about-des1 text-lg-start text-center">E-mail/SMS Order/Trading</p>
                                        <p class="about-des">ensures a standby help-desk or information team at all of its branches.</p>
                                    </div>
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="s-sub-title">The Virtual Trading Platform</p>
                                        <p class="about-des text-justify">For the first time we introduced our Mobile application “LOGO” which is an android based software and allows our client to experience completely different test of trading. It includes total broker solutions and
                                            our investors need not to visit our office for any service. He can get every service on demand only by login the app.</p>
                                        <p class="s-sub-title">Web and E-portal</p>
                                        <p class="about-des text-justify m-0">We have separate e-portal system for our clients where our honorable clients can check their Financial Ledger Statement, Portfolio Statement, Trade Confirmation Notes for any historical date or period. Through this
                                            e-portal system investors can also place their fund requisition which is cleared within a day through Electronic Fund transfer (EFT) System.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--trading end-->
                    <!--margin loan start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/loan.svg" class="s-icon" alt="...">Margin Loan</p>
                    </div>
                    <div class="card rounded s-card shadow-sm" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card-body">
                            <section class="s-loan-bg">
                                <div class="row">
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="s-sub-title">Short Term Margin Loan</p>
                                        <p class="about-des text-justify m-0">Introduced Short Term margin Loan (LOGO) for our clients for Zero interest rate. This is the most popular services of LOGO which was designed for clients who wants to boost up their purchase power for a short period
                                            of time.</p>
                                    </div>
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="s-sub-title">Long Term Margin Loan</p>
                                        <p class="about-des text-justify m-0">Also introduced Long term margin Loan (LTML) facility for our clients who are generally invested their money in Capital market for Long time.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--margin loan end-->
                    <!--fund withdrawal start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/fund.svg" class="s-icon" alt="...">Fund Withdrawal</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <section class="s-withdrawal-bg">
                                    <p class="s-sub-title">Electronic Fund transfer System (EFTN)</p>
                                    <p class="about-des text-justify m-0">Our EFTN System helps our clients to withdraw their balance on time. The system is totally automated and secured so that our clients feel relax about their on demand fund no matter how far they are from our office.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--fund withdrawal end-->

                    <!--fund deposit start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/deposit.svg" class="s-icon" alt="...">Fund Deposit</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <section class="s-deposit-bg">
                                    <p class="about-des text-justify m-0">Clients of LOGO now can deposit in their portfolio account by means of BEFTN. Clients don’t need to come to bank for cheque or cash deposit physically. All a client has to do is instruct his bank to transfer/deposit
                                        fund to the bank accounts of Kabir Securities Limited.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--fund deposit end-->

                    <!--one stop IPO start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/ipo.svg" class="s-icon" alt="...">One Stop IPO Solution</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <p class="about-des text-justify m-0">We developed a prompt service system from where Our clients can apply in IPO from their residence without taking any hassle.</p>
                            </div>
                        </div>
                    </div>
                    <!--one stop IPO end-->

                    <!--trade confirmation start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/trade.svg" class="s-icon" alt="...">Trade Confirmation</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <p class="about-des text-justify m-0">Beside transmission of hard copy of trade confirmation, we send trade confirmation through email and sms. We also send Portfolio to each our client every trading day. We also send money deposit and withdrawal notification
                                    to our valued clients when the transaction incurred. Thus we secured the financial transaction of our clients.</p>
                            </div>
                        </div>
                    </div>
                    <!--trade confirmation end-->

                    <!--hotline number start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/hotline.svg" class="s-icon" alt="...">Hotline Number for Telephonic Trade</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <p class="about-des text-justify m-0">Our hotline number helps our clients to reach directly to his favorite relationship manager. We record all telephonic order of our clients to avoid any kind of dispute and misunderstanding.</p>
                            </div>
                        </div>
                    </div>
                    <!--hotline number end-->

                    <!--research team start-->
                    <div class="col-12 mt-md-4 mt-3" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/team.svg" class="s-icon" alt="...">Research Team</p>
                    </div>
                    <div class="col-12 pt-2" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card rounded s-card shadow-sm">
                            <div class="card-body">
                                <p class="about-des text-justify m-0">We have a strong research team who are dedicated to the fundamental analysis and technical analysis of various listed companies. This team also assigned for recommending bidding price of IPO shares. Our dealer operation
                                    is mainly operated by this team. We are able to provide any types of data of Listed companies which has been disclosed by the company for Public.</p>
                            </div>
                        </div>
                    </div>
                    <!--research team end-->

                    <!--services content end-->
                </div>
                <!--Services end-->

                <!--Account types start-->
                <div class="tab-pane fade" id="account" role="tabpane2" aria-labelledby="account-tab">

                    <!--Foreign Investment A/C start-->
                    <div class="col-12 mt-md-5 mt-4" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/investment.svg" class="s-icon" alt="...">Foreign Investment A/C</p>
                    </div>
                    <div class="card rounded s-card shadow-sm" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card-body">
                            <section class="f-investment-bg">
                                <div class="row">
                                    <div class="col-12 pt-2">
                                        <p class="s-sub-title">FOREIGN INVESTMENT PROCESS</p>
                                        <p class="text-justify about-des">Foreign investors may invest in the capital market of Bangladesh. He has to take the following steps to invest in the secondary market of Bangladesh:</p>
                                        <p class="about-des1 text-lg-start text-center">Opening NITA A/C</p>
                                        <p class="about-des1 text-lg-start text-center">Opening Custodian A/C</p>
                                        <p class="about-des1 text-lg-start text-center">Opening BO A/C</p>
                                        <p class="about-des1 text-lg-start text-center">Funding NITA 2 days prior to security purchase</p>
                                        <p class="about-des1 text-lg-start text-center">Funding BO A/C from NITA 1 day prior to security purchase</p>
                                        <p class="about-des1 text-lg-start text-center">Placing Buy/Sell order to Broker</p>
                                        <p class="about-des">After opening the respective accounts, foreign investors can start trading with Kabir Securities Limited. Buy/Sell confirmation will be sent to the investors via email and/or fax following execution of the order.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--Foreign Investment A/C end-->

                    <!--Local Investment A/C start-->
                    <div class="col-12 mt-md-5 mt-4" data-aos="zoom-in-up" data-aos-duration="500">
                        <p class="s-title text-uppercase"><img src="assets/investment.svg" class="s-icon" alt="...">Local Investment A/C</p>
                    </div>
                    <div class="card rounded s-card shadow-sm" data-aos="zoom-in-down" data-aos-duration="800">
                        <div class="card-body">
                            <section class="l-investment-bg">
                                <div class="row">
                                    <div class="col-12 pt-2">
                                        <p class="s-sub-title">ELIGIBILITY</p>
                                        <p class="text-justify about-des">Any individual who is a Bangladeshi national above the age of 18 or any Bangladeshi Institutions qualify as a Local Investor.</p>
                                    </div>
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="s-sub-title">REQUIRED DOCUMNET FOR BO A/C OPENING</p>
                                        <p class="s-sub-title">For Individual</p>
                                        <p class="about-des1 text-lg-start text-center">2 Copies Passport Size Photograph of each applicant, attested by Introducer</p>
                                        <p class="about-des1 text-lg-start text-center">One Copy Photograph of each Nominee attested by the applicant</p>
                                        <p class="about-des1 text-lg-start text-center">National ID/ Passport (1to 8 page)/ Driving License/ Commissioner Certificate</p>
                                        <p class="about-des1 text-lg-start text-center">Bank statement/ Bank certificate</p>
                                    </div>
                                    <div class="col-md-6 col-12 pt-2">
                                        <p class="s-sub-title">For Institution</p>
                                        <p class="about-des1 text-lg-start text-center">Memorandum/ Article of Association</p>
                                        <p class="about-des1 text-lg-start text-center">Certificate copy of from-Xll form RJSC</p>
                                        <p class="about-des1 text-lg-start text-center">Board Resolution regarding opening the account</p>
                                        <p class="about-des1 text-lg-start text-center">Bank statement/ Bank certificate of said Account</p>
                                        <p class="about-des1 text-lg-start text-center">2 Copies Passport Size Photograph of authorized Person</p>
                                        <p class="about-des1 text-lg-start text-center">Commence of Business (Public Limited Company)</p>
                                        <p class="about-des1 text-lg-start text-center">Copy of TIN/ Trade License</p>
                                        <p class="about-des1 text-lg-start text-center">Company Seal</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--Local Investment A/C end-->

                </div>
                <!--Account types end-->

            </div>
        </section>
    </div>
    <!--Body content end-->


@endsection
