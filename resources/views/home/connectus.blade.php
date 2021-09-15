@extends('layout.app')
@section('content')
    <!--Body content start-->
    <div class="container">
        <section class="">
            <div class="d-flex justify-content-center mt-md-5 mt-4">
                <ul class="nav nav-tab mb-3" id="tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link about-tab active" id="branch-tab" data-bs-toggle="tab" data-bs-target="#branch" type="button" role="tab" aria-controls="branch" aria-selected="true">Branches</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link board-tab" id="booth-tab" data-bs-toggle="tab" data-bs-target="#booth" type="button" role="tab" aria-controls="booth" aria-selected="false">Digital Booth</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="tabContent">
                <!--Services start-->
                <div class="tab-pane fade show active m-0 p-0 mt-md-5 mt-4" id="branch" role="tabpanel" aria-labelledby="branch-tab">
                    <!--banner content start-->

                    <div class="contact-con text-center animate__animated animate__slideInDown">
                        <p class="contact-first-title">Hello! <br> If you need to contact! our branches are here.</p>
                    </div>
                    <!--banner content end-->
                    <!--Head Office start-->
                    <div class="col-12 mt-md-5 mt-4 text-center">
                        <p class="office-title text-uppercase">HEAD OFFICE</p>
                    </div>
                    <div class="card rounded s-card shadow-sm">
                        <div class="card-body">
                            <section class="">
                                <div class="row">
                                    <div class="col-12 pt-2 text-center">
                                        <i class="custom-marker fas fa-map-marker-alt"></i>
                                        <p class="office-sub-title mt-3">Forum central (4th & 5th floor), 21/22 M. M. Ali Road Golpahar Circle, Chattogram, Bangladesh.</p>
                                        <p class="office-des"><i class="fas fa-phone-alt me-3 "></i>+88031-2557065-6</p>
                                        <p class="office-des"><i class="custom-envelope fas fa-envelope me-3 "></i>info@kslbd.net</p>
                                    </div>
                                    <div class="col-12 pt-2 text-center">
                                        <div class="card rounded border-0">
                                            <p class="office-sub-title mt-2">DMD, Chief Executive Officer and Compliance Authority</p>
                                            <p class="office-des">Mohammed Shadman Kabir</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--Head office end-->

                    <!--Other branches start-->
                    <div class="row">

                        <div class="col-md-4 col-12 mt-md-5 mt-4 text-center">
                            <p class="sub-office-title text-uppercase">Jubiliee Road Branch</p>

                            <div class="card rounded s-card shadow-sm">
                                <div class="card-body">
                                    <section class="">
                                        <div class="row">
                                            <div class="col-12 pt-2 text-center">
                                                <i class="custom-marker fas fa-map-marker-alt"></i>
                                                <p class="sub-office-sub-title mt-3">Kader Tower (3rd Floor) 128 Jubilee Road, Chittagong</p>
                                                <p class="sub-office-des"><i class="fas fa-phone-alt me-2 "></i>+880-31-2856088, +880-31-2856099</p>
                                            </div>
                                            <div class="col-12 pt-2 text-center">
                                                <div class="card rounded border-2">
                                                    <p class="sub-office-sub-title mt-2 mb-0">Head of Branch</p>
                                                    <p class="sub-office-des mb-0">Amranur Rahman</p>
                                                    <p class="sub-office-des mb-2"><i class="fas fa-phone-alt me-2 "></i>+8801911 402 904</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 mt-md-5 mt-4 text-center">
                            <p class="sub-office-title text-uppercase">Bahaddarhat Branch</p>

                            <div class="card rounded s-card shadow-sm">
                                <div class="card-body">
                                    <section class="">
                                        <div class="row">
                                            <div class="col-12 pt-2 text-center">
                                                <i class="custom-marker fas fa-map-marker-alt"></i>
                                                <p class="sub-office-sub-title mt-3"> Panama Plaza (3rd Floor) 3523/4062, Arakan Road, Bahaddarhat, Chattogram.</p>
                                                <p class="sub-office-des"><i class="fas fa-phone-alt me-2 "></i>+880-31-672381, +880-31-672382</p>
                                            </div>
                                            <div class="col-12 pt-2 text-center">
                                                <div class="card rounded border-2">
                                                    <p class="sub-office-sub-title mt-2 mb-0">Head of Branch</p>
                                                    <p class="sub-office-des mb-0">Md. Manik Meah</p>
                                                    <p class="sub-office-des mb-2"><i class="fas fa-phone-alt me-2 "></i>+8801912 029 692</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 mt-md-5 mt-4 text-center">
                            <p class="sub-office-title text-uppercase">Anowara Branch</p>

                            <div class="card rounded s-card shadow-sm">
                                <div class="card-body">
                                    <section class="">
                                        <div class="row">
                                            <div class="col-12 pt-2 text-center">
                                                <i class="custom-marker fas fa-map-marker-alt"></i>
                                                <p class="sub-office-sub-title mt-3">Bandar Shopping Complex (2nd Floor) Mohol Khan Bazar, Karnaphuli, Anowara, Chattogram</p>
                                                <p class="sub-office-des"><i class="fas fa-phone-alt me-2 "></i>+8801750 068 900, +8801750 068 999</p>
                                            </div>
                                            <div class="col-12 pt-2 text-center">
                                                <div class="card rounded border-2">
                                                    <p class="sub-office-sub-title mt-2 mb-2">Head of Branch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Other branches end-->
                </div>
                <div class="tab-pane fade" id="booth" role="tabpane2" aria-labelledby="booth-tab">

                    <!--Branch start-->
                    <!--Other branches start-->
                    <div class="row">

                        <div class="col-md-6 col-12 mt-md-5 mt-4 text-center">
                            <p class="sub-office-title text-uppercase">Khatungonj Digital Booth</p>

                            <div class="card rounded s-card shadow-sm">
                                <div class="card-body">
                                    <section class="">
                                        <div class="row">
                                            <div class="col-12 pt-2 text-center">
                                                <i class="custom-marker fas fa-map-marker-alt"></i>
                                                <p class="sub-office-sub-title mt-3"> Baghdadi Building (1st Floor), 116/5 Amir Market,Khatungonj,Chattogram.</p>
                                                <p class="sub-office-des"><i class="custom-envelope fas fa-envelope me-3 "></i>kslbd.ho@gmail.com</p>
                                                <p class="sub-office-des"><i class="fas fa-phone-alt me-2 "></i>+88 01844 483526, +88 01844 483527</p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mt-md-5 mt-4 text-center">
                            <p class="sub-office-title text-uppercase">Nazirhat Digital Booth</p>

                            <div class="card rounded s-card shadow-sm">
                                <div class="card-body">
                                    <section class="">
                                        <div class="row">
                                            <div class="col-12 pt-2 text-center">
                                                <i class="custom-marker fas fa-map-marker-alt"></i>
                                                <p class="sub-office-sub-title mt-3">Nasir Bhavan (2nd Floor), Near Jhonkar Moor, Nazirhat Pouroshova, Fatickchari, Chattogram.</p>
                                                <p class="sub-office-des"><i class="custom-envelope fas fa-envelope me-3 "></i>kslbd.ho@gmail.com</p>
                                                <p class="sub-office-des"><i class="fas fa-phone-alt me-2 "></i>+88 01774 545556</p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Branch end-->

                </div>
            </div>
        </section>
    </div>


@endsection
