<!--stock information start-->
<nav class="navbar navbar-light bg-light p-0 sticky-top shadow-sm">
{{--    <div class="container-fluid p-0 autoplay animate__animated animate__fadeInDown">--}}
        <div class="dse">
            <div class="loading">Loading...</div>
        </div>
        <div class="cse">
            <div class="loading">Loading...</div>
        </div>
{{--        <div class="card up-card">--}}
{{--            <div class="card-body text-center">--}}
{{--                <p class="up-card-text mb-0"><i class="me-2 fas fa-caret-square-up"></i>1 STPRIMFMF 20.50</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

</nav>
<!--stock information end end-->

<!--Nav start-->
<div class="header-inner">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-transparent text-center">
        <div class="container animate__animated animate__fadeInDown">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="assets/logo.png" alt="" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/whoweare')}}">Who we are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/connectus')}}">Connect Us</a>
                    </li>

                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end navbar-expand-lg-custom" id="navbarNav">
                <ul class="navbar-nav">
                    <form>
                        <a href="https://trade.kslbd.net" class="btn live-button rounded-pill mx-3  my-md-0 my-3" type="login button ">Live Trading</a>
                        <a href="{{url('/getstarted')}}" class="btn rounded-pill boaccount-button my-md-0 my-3" type="getstarted button">Open New BO Account</a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--Nav end-->
