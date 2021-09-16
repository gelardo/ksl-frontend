@extends('layout.app')
@section('content')
<!--banner content start-->
<div class="container">
    <section class="news-banner animate__animated animate__zoomIn">
        <div class="row d-flex justify-content-center"></div>
    </section>
</div>

<div class="container news-con text-center animate__animated animate__slideInDown">
    <p class="news-first-title">News</p>
</div>


<!--banner content end-->

<!--news start-->

<div class="container mt-md-4 mt-3">
    <div class="d-flex justify-content-center mt-md-5 mt-4">
        <ul class="nav nav-tab mb-3" id="tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link about-tab" id="ournews-tab" data-bs-toggle="tab" data-bs-target="#ournews" type="button" role="tab" aria-controls="ournews" aria-selected="true">Our News</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link board-tab active" id="marketnews-tab" data-bs-toggle="tab" data-bs-target="#marketnews" type="button" role="tab" aria-controls="marketnews" aria-selected="false">Market News</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link people-tab" id="newspapers-tab" data-bs-toggle="tab" data-bs-target="#newspapers" type="button" role="tab" aria-controls="newspapers" aria-selected="false">News Papers</a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="tabContent">

        <div class="tab-pane fade m-0 p-0 mt-md-4 mt-3" id="ournews" role="tabpanel" aria-labelledby="ournews-tab">

            <div class="row">

                @foreach($news as $single_news)
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="500">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa-{{$single_news->id}}">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">{{$single_news->title}}</p>
                            <div class="news-des text-truncate">{{ $single_news->truncated }}</div>
                            <img src="{{url($single_news->image)}}" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <!-- Modal start-->
            @foreach($news as $single_news)
            <div class="modal" id="exampleModa-{{$single_news->id}}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">{{$single_news->title}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="{{url($single_news->image)}}" class="modal-img" alt="...">
                            </div>
                            <div>{!! $single_news->description !!} </div>

                        </div>

                    </div>
                </div>
            </div>
           @endforeach


            <!--Modal end-->

        </div>

        <div class="tab-pane fade show active mt-md-4 mt-3" id="marketnews" role="tabpane2" aria-labelledby="marketnews-tab">

            <div class="row">
                @foreach($news as $single_news)
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="500">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $single_news->id }}">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">{{$single_news->title}}</p>
                            <p class="news-des text-truncate">{{$single_news->truncated}}</p>
                            <img src="{{url($single_news->image)}}" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Modal start-->
            @foreach($news as $single_news)
            <div class="modal" id="exampleModal{{ $single_news->id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">{{$single_news->title}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="{{url($single_news->image)}}" class="modal-img" alt="...">
                            </div>
                             <div>{!! $single_news->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <!--Modal end-->

        </div>

        <div class="tab-pane fade mt-md-4 mt-3" id="newspapers" role="tabpane3" aria-labelledby="newspapers-tab">

            <div class="d-flex justify-content-center align-items-center">
                <img src="assets/comming-soon.png" class="w-50" alt="..." />
            </div>

        </div>

    </div>

</div>

<!--news end-->
@endsection
