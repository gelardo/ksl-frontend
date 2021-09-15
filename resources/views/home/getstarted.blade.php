@extends('layout.app')
@section('content')

    <!--banner content start-->

    <div class="container">
        <section class="getstarted-banner">
            <div class="row d-flex justify-content-center"></div>
        </section>
        <div class="getstarted-custom-place">
            <div class="getstarted-con text-center">
                <p class="getstarted-first-title text-uppercase">Make Your Money Move</p>
            </div>
            <div class="d-grid justify-content-center">
                <div class="row">
                    <div class="col m-1">
                        <input type="text" class="form-control rounded p-2 px-3 getstarted-name-form" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col m-1">
                        <input type="text" class="form-control rounded p-2 px-3 getstarted-name-form" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="col m-1">
                    <input type="email" class="form-control rounded p-2 px-3 getstarted-form" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="col m-1">
                    <input type="password" class="form-control rounded p-2 px-3 getstarted-form" id="inputPassword" placeholder="password">
                </div>
            </div>
            <div class="text-center mt-1">
                <p class="login-banner-des">If you have an account! <a href="login.html" class="g-link">Log In</a></p>
            </div>
            <div class="container d-flex justify-content-center mt-3">
                <a href="#" target="" class="banner-btn rounded-pill px-4 py-2 shadow-sm text-uppercase">Continue</a>
            </div>
        </div>
    </div>

    <!--banner content end-->
@endsection
