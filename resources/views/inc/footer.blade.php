

<!--footer start-->
<div class="container-fluid custom-margin mb-md-3 mb-2">
    <div class="card footer-card rounded">
        <div class="card-body">
            <div class="container">
                <div class="row my-md-3 my-2">
                    <div class="col-6">
                        <a class="brand" href="#">
                            <img src="assets/logo.png" alt="" height="30" class="size">
                        </a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="col-md-2 col-4">
                            <p class="sc-title">Social</p>
                        </div>
                        <a href="#" target="" class="footer-m"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="" class="footer-m"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="" class="footer-m"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="" class="footer-m"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="progress">
                    <div class="bar" role="bar"></div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="my-md-5 my-4">
                            <a href="#" class="footer-m-title">Products</a>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="footer-des">Cash Management</a>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="footer-des">Stock & Funds</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class=" my-md-5 my-4">
                            <a href="services.html" class="footer-m-title">Services</a>
                        </div>
                        <div class="mb-3">
                            <a href="services.html" class="footer-des">Trading</a>
                        </div>
                        <div class="mb-3">
                            <a href="services.html" class="footer-des">Margin Loan</a>
                        </div>
                        <div class="mb-3">
                            <a href="services.html" class="footer-des">Fund Withdrawal</a>
                        </div>
                        <div class="mb-3">
                            <a href="services.html" class="footer-des">Fund Deposit</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="my-md-5 my-4">
                            <a href="#" class="footer-m-title">Customer Care</a>
                        </div>
                        <div class="mb-3">
                            <a href="contact.html" class="footer-des">Contact Us</a>
                        </div>
                        <div class="mb-3">
                            <a href="about.html" class="footer-des">About Us</a>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="footer-des">Privacy Policy</a>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="footer-des">Terms of Use</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <p class="footer-m-title my-md-5 my-4">Contact Info</p>
                        <p class="footer-des">Call Now for Services!</p>
                        <p class="footer-des">+880 3125 570 626</p>
                        <p class="footer-des">Forum Central (4th Floor)<br>21/22 M. M. Ali Road<br>Golpahar Circle, Chittagong</p>
                    </div>
                </div>
                <div class="text-center mt-md-4 mt-3">
                    <p class="footer-des m-0">All investments involve risks, including the possible loss of capital.</p>
                </div>

                <!--copyright-->
                <div class="col-12 text-center mt-md-4 mt-3">
                    <p class="copyright-p">KABIR SECURITIES LTD © 2021 All right reserved | Developed by <a href="https://www.duoneos.com" class="copyright-a">DUONEOS</a></p>
                </div>
                <!--copyright end-->

            </div>
        </div>
    </div>
</div>
<!--footer end-->
<script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--nav js start-->
<script type="text/javascript">
    $(function() {
        var navbar = $('.header-inner');
        $(window).scroll(function() {
            if ($(window).scrollTop() <= 35) {
                navbar.removeClass('navbar-scroll');
            } else {
                navbar.addClass('navbar-scroll');
            }
        });
    });
</script>
<!--nav js end-->
<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/kakku/kakku.js') }}"></script>
<script>
    var loadingAsset = '/assets/loading.gif';
    $(document).ready(function() {

        $('.counter').counterUp({
            delay: 10,
            time: 1200
        });
        kakkuGetDSE().then(res => {
            TemplateDSE({
                data: res,
                domEl: '.dse',
            })
        })
      @stack('index-push')
        kakkuGetCSE().then(res => {
            TemplateCSE({
                data: res,
                domEl: '.cse',
                bg: '#115852'
            })
            var table6 = $('#cse-taka-table-loser').DataTable({
                "language": {
                    "emptyTable": "Loading data please wait "
                },
                "order": [[ 2, "asc" ]]
            });
            console.log(res);
            res.map((r, i) => {

                table6.row.add([
                    r.name,
                    r.f,
                    r.l[1]
                ]).draw(false);
            })
            var table7 = $('#cse-taka-table-all').DataTable({
                "language": {
                    "emptyTable": "Loading data please wait "
                },
            });
            res.map((r, i) => {

                table7.row.add([
                    r.name,
                    r.f,
                    r.l[1]
                ]).draw(false);
            })
            // myBooks.push(data);
            var table8 = $('#cse-taka-table-gainer').DataTable({
                "language": {
                    "emptyTable": "Loading data please wait "
                },
                "order": [[ 2, "desc" ]]
            });
            res.map((r, i) => {

                table8.row.add([
                    r.name,
                    r.f,
                    r.l[1]
                ]).draw(false);
            })
            document.querySelector('#cse-nav-gainer img').remove();
        })
        document.querySelector('#dse-data-main').innerHTML += '<img src="'+loadingAsset+'" />';
        // $("#cse-data-main").html(`<img src="${loadingAsset}"/>`);
        // $("#dse-data-main").html(`<img src="${loadingAsset}"/>`);
         document.querySelector('#cse-data-main').innerHTML += '<img src="'+loadingAsset+'" />';
        var table = $('#example').DataTable({
            "language": {
                "emptyTable": "Loading data please wait "
            },
        });
        kakkuGetDSEAll().then(res => {
            res.map((r, i) => {
                table.row.add([
                    r.no,
                    r.tradingCode,
                    r.ltp,
                    r.low,
                    r.high,
                    r.ycp,
                    r.closep,
                    r.trade,
                    r.change,
                    r.value,
                    r.volume
                ]).draw(false);
            })
            document.querySelector('#dse-data-main img').remove();
        })

        var table2 = $('#example2').DataTable({
            "language": {
                "emptyTable": "Loading data please wait "
            },
        });
        kakkuGetCSEAll().then(res => {
            res.map((r, i) => {
                table2.row.add([
                    r.no,
                    r.tradingCode,
                    r.ltp,
                    r.open,
                    r.high,
                    r.low,
                    r.ycp,
                    r.trade,
                    r.value,
                    r.volume
                ]).draw(false);
            })
             document.querySelector('#cse-data-main img').remove();
        })
          CreateTableFromJSON();
        // document.querySelector('#cse-data-main img').remove();
        // $("#dse-data-main img").remove();
        // $("#cse-data-main img").remove();
        // document.querySelector('#dse-data-main img').remove();
    });
    function CreateTableFromJSON() {

        var myBooks = null;

        document.querySelector('#nav-gainer').innerHTML += '<img src="'+loadingAsset+'" />';
        fetch('api/withoutcors/')
        // fetch('https://peaceful-mountain-17529.herokuapp.com?/?url=https://www.amarstock.com/LatestPrice/34267d8d73dd')
            .then(
                function(response) {
                    if (response.status !== 200) {
                        console.log('Looks like there was a problem. Status Code: ' +
                            response.status);
                        return;
                    }

                    // Examine the text in the response
                    response.json().then(function(data) {
                        // myBooks.push(data);
                        var table4 = $('#taka-table-loser').DataTable({
                            "language": {
                                "emptyTable": "Loading data please wait "
                            },
                            "order": [[ 2, "asc" ]]
                        });
                        data.map((r, i) => {

                            table4.row.add([
                                r.Scrip,
                                r.LTP,
                                r.ChangePer,
                                r.Volume,
                            ]).draw(false);
                        })
                        var table5 = $('#taka-table-all').DataTable({
                            "language": {
                                "emptyTable": "Loading data please wait "
                            },
                        });
                        data.map((r, i) => {

                            table5.row.add([
                                r.Scrip,
                                r.LTP,
                                r.ChangePer,
                                r.Volume,
                            ]).draw(false);
                        })
                        // myBooks.push(data);
                        var table3 = $('#taka-table-gainer').DataTable({
                            "language": {
                                "emptyTable": "Loading data please wait "
                            },
                            "order": [[ 2, "desc" ]]
                        });
                        data.map((r, i) => {

                            table3.row.add([
                                r.Scrip,
                                r.LTP,
                                r.ChangePer,
                                r.Volume,
                            ]).draw(false);
                        })
                         document.querySelector('#nav-gainer img').remove();
                    });
                }
            )
            .catch(function(err) {
                console.log('Fetch Error :-S', err);
            });


        // EXTRACT VALUE FOR HTML HEADER.
        // ('Book ID', 'Book Name', 'Category' and 'Price')

    }
</script>



</body>

</html>
