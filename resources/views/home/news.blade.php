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

                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="500">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa6">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার</p>
                            <img src="assets/berger logo.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="600">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa7">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন</p>
                            <img src="assets/grameenphone.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="700">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa8">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">ন্যাশনাল ব্যাংকের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">ন্যাশনাল ব্যাংক লিমিটেড (এনবিএল) গত ৩১ ডিসেম্বর, ২০২০ তারিখে সমাপ্ত</p>
                            <img src="assets/national-bank.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="800">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa9">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">রবির দ্বিতীয় প্রান্তিক প্রকাশ</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা</p>
                            <img src="assets/robi.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="900">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa10">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">এসবিএসি ব্যাংকের আইপিওতে ১৪ গুণ আবেদন</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজার থেকে অর্থ উত্তোলনের প্রক্রিয়ায় থাকা সাউথ বাংলা</p>
                            <img src="assets/sbac-bank.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa6">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার</p>
                            <img src="assets/berger logo.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1100">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa7">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন</p>
                            <img src="assets/grameenphone.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1200">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa8">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">রবির দ্বিতীয় প্রান্তিক প্রকাশ</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা</p>
                            <img src="assets/robi.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal start-->
            <div class="modal" id="exampleModa6" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/berger logo.png" class="modal-img" alt="...">
                            </div>
                            <p>পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার পেইন্টস বাংলাদেশ লিমিটেড গত ৩১ মার্চ, ২০২১ তারিখে সমাপ্ত হিসাববছরের জন্য লভ্যাংশ ঘোষণা করেছে। কোম্পানিটি আলোচিত বছরের জন্য শেয়ারহোল্ডারদেরকে ৩৭৫ শতাংশ নগদ লভ্যাংশ দেবে।</p>
                            <p>সোমবার (১৯ জুলাই) অনুষ্ঠিত কোম্পানিটির পরিচালনা পর্ষদের বৈঠকে আলোচিত বছরের নিরীক্ষিত আর্থিক প্রতিবেদন পর্যালোচনা ও অনুমোদনের পর লভ্যাংশ সংক্রান্ত এই সিদ্ধান্ত নেওয়া হয়।</p>
                            <p>কোম্পানি সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>আলোচিত বছরে সহযোগী প্রতিষ্ঠানের আয়সহ বার্জার পেইন্টসের সমন্বিত শেয়ার প্রতি আয় (Consolidated EPS) হয়েছে ৫৮ টাকা ০৩ পয়সা। আগের বছর সমন্বিত ইপিএস ৫২ টাকা ২২ পয়সা ছিল।</p>
                            <p>আলোচিত বছরে কোম্পানিটির শেয়ার প্রতি ক্যাশ ফ্লো ছিল ৭২ টাকা ১০ পয়সা, যা আগের বছর ৮১ টাকা ৯০ পয়সা ছিল।</p>
                            <p>গত ৩১ মার্চ তারিখে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ২৩২ টাকা ৭৮ পয়সা।</p>
                            <p>গত ৩১ মার্চ তারিখে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ২৩২ টাকা ৭৮ পয়সা।</p>
                            <p>অর্থসূচক/</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa7" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/grameenphone.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন চলতি ২০২১ অর্থবছরের জন্য শেয়ারহোল্ডারদের ১২৫ শতাংশ অন্তবর্তী ক্যাশ ডিভিডেন্ড ঘোষণা করেছে। কোম্পানি সূত্রে এ তথ্য জানা গেছে।</p>
                            <p>বুধবার (১৪ জুলাই) বিকেলে কোম্পানিটির পরিচালনা পর্ষদের সভায় এ ডিভিডেন্ড ঘোষণা করা হয়।</p>
                            <p>জানা যায়, চলতি অর্থবছরের প্রথমার্ধে (জানুয়ারি-মার্চ’২১) গ্রামীণফোনের শেয়ার প্রতি আয় (ইপিএস) হয়েছে ১২ টাকা ৮৯ পয়সা। আগের অর্থবছরের একই সময়ে ইপিএস ছিল ১৩ টাকা ৩০ পয়সা।</p>
                            <p>আলোচ্য অর্থবছরের ৩০ জুন শেষে কোম্পানিটির শেয়ারপ্রতি নিট সম্পদমূল্য (এনএভিপিএস) দাঁড়িয়েছে ৩৬ টাকা ৯৮ পয়সা, আগের হিসাব বছর শেষে যা ছিল ৩৭ টাকা ৭০ পয়সা।</p>
                            <p>অন্তবর্তী ডিভিডেন্ড সংক্রান্ত রেকর্ড ডেট নির্ধারণ করা হয়েছে আগামী ৯ আগস্ট।</p>
                            <p>উল্লেখ, ৩১ ডিসেম্বর সমাপ্ত ২০২০ অর্থবছরে গ্রামীণফোন ১৪৫ শতাংশ চূড়ান্ত ক্যাশ ডিভিডেন্ড দিয়েছে। এর আগে কোম্পানিটি ১৩০ শতাংশ অন্তবর্তী ক্যাশ ডিভিডেন্ড দিয়েছিল। সবমিলিয়ে আলোচ্য হিসাব বছরে মোট ২৭৫ শতাংশ নগদ লভ্যাংশ পেয়েছেন কোম্পানিটির
                                বিনিয়োগকারীরা। সর্বশেষ সমাপ্ত অর্থবছরে গ্রামীণফোনের ইপিএস হয়েছে ২৭ টাকা ৫৪ পয়সা। আগের অর্থবছরে যা ছিল ২৫ টাকা ৫৬ পয়সা।</p>
                            <p>৩১ ডিসেম্বর ২০২০ শেষে কোম্পানিটির এনএভিপিএস দাঁড়িয়েছে ৩৮ টাকা ৫৯ পয়সা, যা এর আগের অর্থবছর শেষে ছিল ২৮ টাকা ৪০ পয়সা।</p>
                            <p>শেয়ার নিউজ, ১৫ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa8" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">ন্যাশনাল ব্যাংকের লভ্যাংশ ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/national-bank.png" class="modal-img" alt="...">
                            </div>
                            <p>পুঁজিবাজারে তালিকাভুক্ত কোম্পানি ন্যাশনাল ব্যাংক লিমিটেড (এনবিএল) গত ৩১ ডিসেম্বর, ২০২০ তারিখে সমাপ্ত হিসাববছরের জন্য লভ্যাংশ ঘোষণা করেছে। ব্যাংকটি আলোচিত বছরের জন্য শেয়ারহোল্ডারদের ৫ শতাংশ স্টক লভ্যাংশ দেবে।</p>
                            <p>বুধবার (৩০ জুন) অনুষ্ঠিত ব্যাংকের পরিচালনা পর্ষদের বৈঠকে সর্বশেষ হিসাববছরের নিরীক্ষিত আর্থিক প্রতিবেদন পর্যালোচনা ও অনুমোদনের পর লভ্যাংশ সংক্রান্ত এই সিদ্ধান্ত নেওয়া হয়।</p>
                            <p>ন্যাশনাল ব্যাংক সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>সর্বশেষ বছরে ব্যাংকটির সমন্বিত শেয়ার প্রতি আয় (Consolidated EPS) হয়েছে ১ টাকা ১৮ পয়সা। আগের বছর সমন্বিতভাবে শেয়ার প্রতি আয় হয়েছিল ১ টাকা ৩৪ পয়সা।</p>
                            <p>সর্বশেষ বছরে এককভাবে ব্যাংকটির শেয়ার প্রতি (Solo EPS) আয় হয়েছে টাকা পয়সা। আগের বছর এককভাবে শেয়ার প্রতি আয় হয়েছিল টাকা ১৬ পয়সা।</p>
                            <p>আগামী ৩০ সেপ্টেম্বর সকাল ১১ টায় ডিজিটাল প্ল্যাটফরমের মাধ্যমে ব্যাংকটির বার্ষিক সাধারণ সভা (এজিএম) অনুষ্ঠিত হবে। এর জন্য রেকর্ড তারিখ নির্ধারণ করা হয়েছে ১৭ আগস্ট।</p>
                            <p>অর্থসূচক/</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa9" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">রবির দ্বিতীয় প্রান্তিক প্রকাশ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/robi.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা লিমিটেড চলতি অর্থবছরের দ্বিতীয় প্রান্তিকের (এপ্রিল-জুন’২১) অনিরীক্ষিত আর্থিক প্রতিবেদন প্রকাশ করেছে। কোম্পানি সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>দ্বিতীয় প্রান্তিকে কোম্পানিটির শেয়ার প্রতি আয় সমন্বিত আয় (ইপিএস) হয়েছে ৯ পয়সা। আগের বছর একই সময়ে সমন্বিত ইপিএস ছিল ১৩ পয়সা।</p>
                            <p>অন্যদিকে চলতি অর্থবছরের প্রথম দুই প্রান্তিকে অর্থাৎ প্রথম ৬ মাসে (জানুয়ারি-জুন’২১) কোম্পানিটির সমন্বিত ইপিএস হয়েছে ১৫ পয়সা। আগের বছর একই সময়ে সমন্বিত ইপিএস ছিল ১৬ পয়সা।</p>
                            <p>দুই প্রান্তিকে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি ক্যাশ ফ্লো ছিল ৩ টাকা ১ পয়সা। আগের বছর একই সময়ে ক্যাশ ফ্লো ২ টাকা ৫৪ পয়সা ছিল।</p>
                            <p>৩০ জুন, ২০২১ তারিখে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ১২ টাকা ৪৫ পয়সা।</p>
                            <p>শেয়ারনিউজ, ২৭ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa10" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">এসবিএসি ব্যাংকের আইপিওতে ১৪ গুণ আবেদন</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-end mt-2 me-4">
                            <button type="button" class="btn btn-sm about-btn rounded"><i class="fas fa-cloud-download-alt me-2"></i>Download</button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/sbac-bank.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক : পুঁজিবাজার থেকে অর্থ উত্তোলনের প্রক্রিয়ায় থাকা সাউথ বাংলা এগ্রিকালচার অ্যান্ড কমার্স ব্যাংক লিমিটেডের প্রাথমিক গণপ্রস্তাবে (আইপিও) প্রায় ১৪ গুণ আবেদন জমা পড়েছে। ডিএসই সূত্রে এ তথ্য জানা গেছে।</p>
                            <p>আগামী ২৯ জুলাই, বৃহস্পতিবার দুপুর ১২টায় রাজধানীর নিকুঞ্জে ঢাকা স্টক এক্সচেঞ্জ টাওয়ারে আয়োজিত এক অনুষ্ঠানের মাধ্যমে আনুপাতিকহারে শেয়ার বরাদ্দ দেওয়া হবে।</p>
                            <p>সূত্র জানায়, আইপিওতে ব্যাংকটি অভিহিত মূল্য তথা ১০ টাকা দামে ১০ কোটি সাধারণ শেয়ার ইস্যু করবে। আর এর মাধ্যমে পুঁজিবাজার থেকে ১০০ কোটি টাকা সংগ্রহ করবে ব্যাংকটি। এর বিপরীতে এক হাজার ৩৯১ কোটি ৪৪ লাখ ৮৬ হাজার টাকার আবেদন জমা
                                পড়েছে। সে হিসেবে চাহিদার ১৩ দশমিক ৯১ গুণ আবেদন জমা পড়ে। পুঁজিবাজার থেকে ব্যাংকটি অর্থ উত্তোলন করে সরকারি সিকিউরিটিজ ক্রয় এবং আইপিও খরচ খাতে ব্যয় করবে।</p>
                            <p>এ প্রসঙ্গে এসবিএসি ব্যাংকের ব্যবস্থাপনা পরিচালক ও প্রধান নির্বাহী মোসলেহ উদ্দীন আহমেদ বলেন, সর্বপ্রথম আমি বিনিয়োগকারীদের ধন্যবাদ ও কৃতজ্ঞতা জানাই। এই করোনাকালীন কঠোর লকডাউনের মধ্যে তারা অভূতপূর্ব সাড়া দিয়েছেন। তারা আমাদের
                                ব্যাংকের প্রতি যে আস্থা দেখিয়েছেন তাতে আমাদের ভবিষ্যৎ কর্মপরিকল্পনা ও দায়িত্বপালনে জবাবদিহিতা আরও বেড়ে গেছে। আমাদের ব্যাংকের পরিচালনা পর্ষদ ও ব্যবস্থাপনা কর্তৃপক্ষের তরফ থেকে এর যথাযথ প্রতিদান দিতে বদ্ধপরিকর।</p>
                            <p>তিনি আরও বলেন, একটি দেশের অর্থনৈতিক উন্নয়নে যে শিল্পায়ন গড়ে উঠে তাতে পুঁজিবাজারের মাধ্যমে দীর্ঘস্থায়ী বিনিয়োগ করা হয়ে থাকে। সরকারের বড় বড় প্রকল্পে পুঁজিবাজারের মাধ্যমে বিনিয়োগ করা সম্ভব। সুতরাং সাউথ বাংলা ব্যাংক পুঁজিবাজারের
                                সার্বিক উন্নয়ন ভূমিকা পালন করবে ইনশাল্লাহ। সে জন্য তিনি সকলের সহযোগিতা প্রত্যাশা কামনা করেন। পাশাপাশি তিনি পুঁজিবাজারে আসার প্রক্রিয়ায় বাংলাদেশ ব্যাংক, বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন, ঢাকা ও চট্টগ্রাম স্টক
                                এক্সচেঞ্জ, ইস্যু ম্যানেজারসহ সংশ্লিষ্ট সকলের প্রতি বিশেষ কৃতজ্ঞতা জানান।</p>
                            <p>ব্যাংক সূত্রে জানা যায়, ২০১৩ সালের এপ্রিল মাসে বাণিজ্যিকভাবে যাত্রা শুরু করা সাউথবাংলা এগ্রিকালচার অ্যান্ড কমার্স ব্যাংক গত ৯ মে আইপিওর অনুমোদন পায়। ওইদিন বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (এসইসি) তার ৭৭৩তম সভায়
                                এ অনুমোদন দেয়। এর আগে দীর্ঘ ১২ বছর পর চতুর্থ প্রজন্মের ব্যাংক হিসেবে এনআরবি কমার্শিয়াল ব্যাংক পুঁজিবাজারে তালিকাভুক্ত হয়; ব্যাংকটির আইপিওতে আবেদন পড়েছিল ৮ দশমিক ৭২ গুণ।</p>
                            <p>সাউথবাংলা এগ্রিকালচার এন্ড কমার্স ব্যাংকের ২০২০ সালের ৩০ সেপ্টেম্বর নিরীক্ষিত আর্থিক বিবরণী অনুযায়ী পুন:মূল্যায়ন ছাড়া নেট অ্যাসেটভ্যালু দাঁড়িয়েছে ১৩.১৮ টাকা। আর ওই বছরের ৯ মাসে ইপিএস হয়েছে ০.৯৪ টাকা। যা বিগত ৫ বছরের ভারিত
                                গড় হারে হয়েছে ১.২৪ টাকা। আইপিওতে ব্যাংকটির ইস্যু ম্যানেজার হিসেবে দায়িত্ব পালন করছে আইসিবি ক্যাপিটাল ম্যানেজমেন্ট লিমিটেড।</p>
                            <p>শেয়ারনিউজ, ২৭ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal end-->

        </div>

        <div class="tab-pane fade show active mt-md-4 mt-3" id="marketnews" role="tabpane2" aria-labelledby="marketnews-tab">

            <div class="row">

                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="500">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার</p>
                            <img src="assets/berger logo.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="600">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন</p>
                            <img src="assets/grameenphone.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="700">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa3">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">ন্যাশনাল ব্যাংকের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">ন্যাশনাল ব্যাংক লিমিটেড (এনবিএল) গত ৩১ ডিসেম্বর, ২০২০ তারিখে সমাপ্ত</p>
                            <img src="assets/national-bank.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="800">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa4">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">রবির দ্বিতীয় প্রান্তিক প্রকাশ</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা</p>
                            <img src="assets/robi.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="900">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa5">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">এসবিএসি ব্যাংকের আইপিওতে ১৪ গুণ আবেদন</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজার থেকে অর্থ উত্তোলনের প্রক্রিয়ায় থাকা সাউথ বাংলা</p>
                            <img src="assets/sbac-bank.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</p>
                            <p class="news-des text-truncate">পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার</p>
                            <img src="assets/berger logo.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1100">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন</p>
                            <img src="assets/grameenphone.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 p-0 my-2" data-aos="zoom-in-down" data-aos-duration="1200">
                    <div class="card news-card rounded m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModa4">
                        <div class="card-body">
                            <p class="news-title text-uppercase text-truncate">রবির দ্বিতীয় প্রান্তিক প্রকাশ</p>
                            <p class="news-des text-truncate">নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা</p>
                            <img src="assets/robi.png" class="news-img" alt="...">
                            <div class="text-end">
                                <i class="far fa-plus-square"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal start-->
            <div class="modal" id="exampleModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">বার্জার পেইন্টসের লভ্যাংশ ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/berger logo.png" class="modal-img" alt="...">
                            </div>
                            <p>পুঁজিবাজারে তালিকাভুক্ত বিবিধ খাতের প্রতিষ্ঠান বার্জার পেইন্টস বাংলাদেশ লিমিটেড গত ৩১ মার্চ, ২০২১ তারিখে সমাপ্ত হিসাববছরের জন্য লভ্যাংশ ঘোষণা করেছে। কোম্পানিটি আলোচিত বছরের জন্য শেয়ারহোল্ডারদেরকে ৩৭৫ শতাংশ নগদ লভ্যাংশ দেবে।</p>
                            <p>সোমবার (১৯ জুলাই) অনুষ্ঠিত কোম্পানিটির পরিচালনা পর্ষদের বৈঠকে আলোচিত বছরের নিরীক্ষিত আর্থিক প্রতিবেদন পর্যালোচনা ও অনুমোদনের পর লভ্যাংশ সংক্রান্ত এই সিদ্ধান্ত নেওয়া হয়।</p>
                            <p>কোম্পানি সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>আলোচিত বছরে সহযোগী প্রতিষ্ঠানের আয়সহ বার্জার পেইন্টসের সমন্বিত শেয়ার প্রতি আয় (Consolidated EPS) হয়েছে ৫৮ টাকা ০৩ পয়সা। আগের বছর সমন্বিত ইপিএস ৫২ টাকা ২২ পয়সা ছিল।</p>
                            <p>আলোচিত বছরে কোম্পানিটির শেয়ার প্রতি ক্যাশ ফ্লো ছিল ৭২ টাকা ১০ পয়সা, যা আগের বছর ৮১ টাকা ৯০ পয়সা ছিল।</p>
                            <p>গত ৩১ মার্চ তারিখে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ২৩২ টাকা ৭৮ পয়সা।</p>
                            <p>গত ৩১ মার্চ তারিখে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ২৩২ টাকা ৭৮ পয়সা।</p>
                            <p>অর্থসূচক/</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">গ্রামীণফোনের অন্তর্বতী ডিভিডেন্ড ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/grameenphone.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক: পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি গ্রামীণফোন চলতি ২০২১ অর্থবছরের জন্য শেয়ারহোল্ডারদের ১২৫ শতাংশ অন্তবর্তী ক্যাশ ডিভিডেন্ড ঘোষণা করেছে। কোম্পানি সূত্রে এ তথ্য জানা গেছে।</p>
                            <p>বুধবার (১৪ জুলাই) বিকেলে কোম্পানিটির পরিচালনা পর্ষদের সভায় এ ডিভিডেন্ড ঘোষণা করা হয়।</p>
                            <p>জানা যায়, চলতি অর্থবছরের প্রথমার্ধে (জানুয়ারি-মার্চ’২১) গ্রামীণফোনের শেয়ার প্রতি আয় (ইপিএস) হয়েছে ১২ টাকা ৮৯ পয়সা। আগের অর্থবছরের একই সময়ে ইপিএস ছিল ১৩ টাকা ৩০ পয়সা।</p>
                            <p>আলোচ্য অর্থবছরের ৩০ জুন শেষে কোম্পানিটির শেয়ারপ্রতি নিট সম্পদমূল্য (এনএভিপিএস) দাঁড়িয়েছে ৩৬ টাকা ৯৮ পয়সা, আগের হিসাব বছর শেষে যা ছিল ৩৭ টাকা ৭০ পয়সা।</p>
                            <p>অন্তবর্তী ডিভিডেন্ড সংক্রান্ত রেকর্ড ডেট নির্ধারণ করা হয়েছে আগামী ৯ আগস্ট।</p>
                            <p>উল্লেখ, ৩১ ডিসেম্বর সমাপ্ত ২০২০ অর্থবছরে গ্রামীণফোন ১৪৫ শতাংশ চূড়ান্ত ক্যাশ ডিভিডেন্ড দিয়েছে। এর আগে কোম্পানিটি ১৩০ শতাংশ অন্তবর্তী ক্যাশ ডিভিডেন্ড দিয়েছিল। সবমিলিয়ে আলোচ্য হিসাব বছরে মোট ২৭৫ শতাংশ নগদ লভ্যাংশ পেয়েছেন কোম্পানিটির
                                বিনিয়োগকারীরা। সর্বশেষ সমাপ্ত অর্থবছরে গ্রামীণফোনের ইপিএস হয়েছে ২৭ টাকা ৫৪ পয়সা। আগের অর্থবছরে যা ছিল ২৫ টাকা ৫৬ পয়সা।</p>
                            <p>৩১ ডিসেম্বর ২০২০ শেষে কোম্পানিটির এনএভিপিএস দাঁড়িয়েছে ৩৮ টাকা ৫৯ পয়সা, যা এর আগের অর্থবছর শেষে ছিল ২৮ টাকা ৪০ পয়সা।</p>
                            <p>শেয়ার নিউজ, ১৫ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa3" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">ন্যাশনাল ব্যাংকের লভ্যাংশ ঘোষণা</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/national-bank.png" class="modal-img" alt="...">
                            </div>
                            <p>পুঁজিবাজারে তালিকাভুক্ত কোম্পানি ন্যাশনাল ব্যাংক লিমিটেড (এনবিএল) গত ৩১ ডিসেম্বর, ২০২০ তারিখে সমাপ্ত হিসাববছরের জন্য লভ্যাংশ ঘোষণা করেছে। ব্যাংকটি আলোচিত বছরের জন্য শেয়ারহোল্ডারদের ৫ শতাংশ স্টক লভ্যাংশ দেবে।</p>
                            <p>বুধবার (৩০ জুন) অনুষ্ঠিত ব্যাংকের পরিচালনা পর্ষদের বৈঠকে সর্বশেষ হিসাববছরের নিরীক্ষিত আর্থিক প্রতিবেদন পর্যালোচনা ও অনুমোদনের পর লভ্যাংশ সংক্রান্ত এই সিদ্ধান্ত নেওয়া হয়।</p>
                            <p>ন্যাশনাল ব্যাংক সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>সর্বশেষ বছরে ব্যাংকটির সমন্বিত শেয়ার প্রতি আয় (Consolidated EPS) হয়েছে ১ টাকা ১৮ পয়সা। আগের বছর সমন্বিতভাবে শেয়ার প্রতি আয় হয়েছিল ১ টাকা ৩৪ পয়সা।</p>
                            <p>সর্বশেষ বছরে এককভাবে ব্যাংকটির শেয়ার প্রতি (Solo EPS) আয় হয়েছে টাকা পয়সা। আগের বছর এককভাবে শেয়ার প্রতি আয় হয়েছিল টাকা ১৬ পয়সা।</p>
                            <p>আগামী ৩০ সেপ্টেম্বর সকাল ১১ টায় ডিজিটাল প্ল্যাটফরমের মাধ্যমে ব্যাংকটির বার্ষিক সাধারণ সভা (এজিএম) অনুষ্ঠিত হবে। এর জন্য রেকর্ড তারিখ নির্ধারণ করা হয়েছে ১৭ আগস্ট।</p>
                            <p>অর্থসূচক/</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa4" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">রবির দ্বিতীয় প্রান্তিক প্রকাশ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/robi.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক : পুঁজিবাজারে তালিকাভুক্ত বহুজাতিক কোম্পানি রবি আজিয়াটা লিমিটেড চলতি অর্থবছরের দ্বিতীয় প্রান্তিকের (এপ্রিল-জুন’২১) অনিরীক্ষিত আর্থিক প্রতিবেদন প্রকাশ করেছে। কোম্পানি সূত্রে এই তথ্য জানা গেছে।</p>
                            <p>দ্বিতীয় প্রান্তিকে কোম্পানিটির শেয়ার প্রতি আয় সমন্বিত আয় (ইপিএস) হয়েছে ৯ পয়সা। আগের বছর একই সময়ে সমন্বিত ইপিএস ছিল ১৩ পয়সা।</p>
                            <p>অন্যদিকে চলতি অর্থবছরের প্রথম দুই প্রান্তিকে অর্থাৎ প্রথম ৬ মাসে (জানুয়ারি-জুন’২১) কোম্পানিটির সমন্বিত ইপিএস হয়েছে ১৫ পয়সা। আগের বছর একই সময়ে সমন্বিত ইপিএস ছিল ১৬ পয়সা।</p>
                            <p>দুই প্রান্তিকে সমন্বিতভাবে কোম্পানিটির শেয়ার প্রতি ক্যাশ ফ্লো ছিল ৩ টাকা ১ পয়সা। আগের বছর একই সময়ে ক্যাশ ফ্লো ২ টাকা ৫৪ পয়সা ছিল।</p>
                            <p>৩০ জুন, ২০২১ তারিখে কোম্পানিটির শেয়ার প্রতি নিট সম্পদ মূল্য (এনএভিপিএস) ছিল ১২ টাকা ৪৫ পয়সা।</p>
                            <p>শেয়ারনিউজ, ২৭ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="exampleModa5" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                    <div class="modal-content rounded animate__animated animate__zoomIn">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">এসবিএসি ব্যাংকের আইপিওতে ১৪ গুণ আবেদন</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-text text-center">
                            <div class="mb-5">
                                <img src="assets/sbac-bank.png" class="modal-img" alt="...">
                            </div>
                            <p>নিজস্ব প্রতিবেদক : পুঁজিবাজার থেকে অর্থ উত্তোলনের প্রক্রিয়ায় থাকা সাউথ বাংলা এগ্রিকালচার অ্যান্ড কমার্স ব্যাংক লিমিটেডের প্রাথমিক গণপ্রস্তাবে (আইপিও) প্রায় ১৪ গুণ আবেদন জমা পড়েছে। ডিএসই সূত্রে এ তথ্য জানা গেছে।</p>
                            <p>আগামী ২৯ জুলাই, বৃহস্পতিবার দুপুর ১২টায় রাজধানীর নিকুঞ্জে ঢাকা স্টক এক্সচেঞ্জ টাওয়ারে আয়োজিত এক অনুষ্ঠানের মাধ্যমে আনুপাতিকহারে শেয়ার বরাদ্দ দেওয়া হবে।</p>
                            <p>সূত্র জানায়, আইপিওতে ব্যাংকটি অভিহিত মূল্য তথা ১০ টাকা দামে ১০ কোটি সাধারণ শেয়ার ইস্যু করবে। আর এর মাধ্যমে পুঁজিবাজার থেকে ১০০ কোটি টাকা সংগ্রহ করবে ব্যাংকটি। এর বিপরীতে এক হাজার ৩৯১ কোটি ৪৪ লাখ ৮৬ হাজার টাকার আবেদন জমা
                                পড়েছে। সে হিসেবে চাহিদার ১৩ দশমিক ৯১ গুণ আবেদন জমা পড়ে। পুঁজিবাজার থেকে ব্যাংকটি অর্থ উত্তোলন করে সরকারি সিকিউরিটিজ ক্রয় এবং আইপিও খরচ খাতে ব্যয় করবে।</p>
                            <p>এ প্রসঙ্গে এসবিএসি ব্যাংকের ব্যবস্থাপনা পরিচালক ও প্রধান নির্বাহী মোসলেহ উদ্দীন আহমেদ বলেন, সর্বপ্রথম আমি বিনিয়োগকারীদের ধন্যবাদ ও কৃতজ্ঞতা জানাই। এই করোনাকালীন কঠোর লকডাউনের মধ্যে তারা অভূতপূর্ব সাড়া দিয়েছেন। তারা আমাদের
                                ব্যাংকের প্রতি যে আস্থা দেখিয়েছেন তাতে আমাদের ভবিষ্যৎ কর্মপরিকল্পনা ও দায়িত্বপালনে জবাবদিহিতা আরও বেড়ে গেছে। আমাদের ব্যাংকের পরিচালনা পর্ষদ ও ব্যবস্থাপনা কর্তৃপক্ষের তরফ থেকে এর যথাযথ প্রতিদান দিতে বদ্ধপরিকর।</p>
                            <p>তিনি আরও বলেন, একটি দেশের অর্থনৈতিক উন্নয়নে যে শিল্পায়ন গড়ে উঠে তাতে পুঁজিবাজারের মাধ্যমে দীর্ঘস্থায়ী বিনিয়োগ করা হয়ে থাকে। সরকারের বড় বড় প্রকল্পে পুঁজিবাজারের মাধ্যমে বিনিয়োগ করা সম্ভব। সুতরাং সাউথ বাংলা ব্যাংক পুঁজিবাজারের
                                সার্বিক উন্নয়ন ভূমিকা পালন করবে ইনশাল্লাহ। সে জন্য তিনি সকলের সহযোগিতা প্রত্যাশা কামনা করেন। পাশাপাশি তিনি পুঁজিবাজারে আসার প্রক্রিয়ায় বাংলাদেশ ব্যাংক, বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন, ঢাকা ও চট্টগ্রাম স্টক
                                এক্সচেঞ্জ, ইস্যু ম্যানেজারসহ সংশ্লিষ্ট সকলের প্রতি বিশেষ কৃতজ্ঞতা জানান।</p>
                            <p>ব্যাংক সূত্রে জানা যায়, ২০১৩ সালের এপ্রিল মাসে বাণিজ্যিকভাবে যাত্রা শুরু করা সাউথবাংলা এগ্রিকালচার অ্যান্ড কমার্স ব্যাংক গত ৯ মে আইপিওর অনুমোদন পায়। ওইদিন বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (এসইসি) তার ৭৭৩তম সভায়
                                এ অনুমোদন দেয়। এর আগে দীর্ঘ ১২ বছর পর চতুর্থ প্রজন্মের ব্যাংক হিসেবে এনআরবি কমার্শিয়াল ব্যাংক পুঁজিবাজারে তালিকাভুক্ত হয়; ব্যাংকটির আইপিওতে আবেদন পড়েছিল ৮ দশমিক ৭২ গুণ।</p>
                            <p>সাউথবাংলা এগ্রিকালচার এন্ড কমার্স ব্যাংকের ২০২০ সালের ৩০ সেপ্টেম্বর নিরীক্ষিত আর্থিক বিবরণী অনুযায়ী পুন:মূল্যায়ন ছাড়া নেট অ্যাসেটভ্যালু দাঁড়িয়েছে ১৩.১৮ টাকা। আর ওই বছরের ৯ মাসে ইপিএস হয়েছে ০.৯৪ টাকা। যা বিগত ৫ বছরের ভারিত
                                গড় হারে হয়েছে ১.২৪ টাকা। আইপিওতে ব্যাংকটির ইস্যু ম্যানেজার হিসেবে দায়িত্ব পালন করছে আইসিবি ক্যাপিটাল ম্যানেজমেন্ট লিমিটেড।</p>
                            <p>শেয়ারনিউজ, ২৭ জুলাই ২০২১</p>
                        </div>
                    </div>
                </div>
            </div>
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
