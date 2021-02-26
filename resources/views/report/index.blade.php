<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KULINER CIANJUR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{asset('template/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/jquery.timepicker.css') }}">

    

    <link rel="stylesheet" href="{{asset('template/assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Mita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Selamat Datang Di Restoran Mita</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Selamat makan &amp; Menikmati Menu Yang Telah Kami Sediakan.</h2>    
            <p><a href="#" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#">SELAMAT DATANG</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="{{asset('template/assets/images/chef.PNG" alt="Free Template by colorlib.com" class="img-fluid') }}">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    
    <!-- END section -->

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Menu Di Restauran ini</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">pilihlah menu yang cocok untuk anda makan</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
              </li>
              
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/a.jpg" class="img-fluid') }}" alt="NASI PEPES">
                      <div class="media-body">
                        <h5 class="mt-0">NASI PEPES</h5>
                        <p>NASI PEPES merupakan nasi yang sangat lezat rasanya yang dominan gurih dengan bumbu yang khas
                          serta tambahan kaldu ayam.</p>
                        <h6 class="text-primary menu-price">Rp. 15.000</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/b.jpg" class="img-fluid') }}" alt="TAUCO CAP MEONG">
                      <div class="media-body">
                        <h5 class="mt-0">TAUCO CAP MEONG</h5>
                        <p>TAUCO CAP MEONG merupakan makanan yang legendaris dan selalu ramai saat musim liburan tiba.Aroma dari tauco ini harum dan selalu disajikan dengan wadah tanah liat.</p>
                        <h6 class="text-primary menu-price">Rp. 20.000</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/c.jpg" class="img-fluid') }}" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">BUBUR CIANJUR</h5>
                        <p>BUBUR CIANJUR merupakan bubur yang enak dan lezat dan di berikan potongan berupa ati,usus dan ampela ayam</p>
                        <h6 class="text-primary menu-price">Rp. 10.000</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/d.jpg" class="img-fluid') }}" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">SATE MARANGGI</h5>
                        <p> SATE MARANGGI adalah sate yang menggunakan bumbu yang sederhana berupa bumbu bacem untuk di oleskan pada daging tersebut</p>
                        <h6 class="text-primary menu-price">Rp.15.000</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/e.jpg" class="img-fluid') }}" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">GECO</h5>
                        <p>GECO adalah makanan yang khas dari kota cianjur yang berrti tauge dan tauco.</p>
                        <h6 class="text-primary menu-price">Rp.15.000</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/f.jpg" class="img-fluid') }}" alt="Kacang">
                      <div class="media-body">
                        <h5 class="mt-0">Laksa Cianjur</h5>
                        <p>LAKSA CIANJUR jenis makanan memiliki rasa yang enak dan juga mengandung selera apabila melihat 
                           sekilas hampir mirip dengan gulai</p>
                        <h6 class="text-primary menu-price">Rp.20.000</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Makanan Baru Di Restauran </h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Daftar Makanan Baru Di Restauran</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="{{asset('template/assets/images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid') }}">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">MIE AYAM MANG MEMED</h5>
                <p class="mb-4">mie ayam mang memed berisikan mie, ayam, dan juga kuah khas mie ayam, dan juga 
                  kuah khas mie ayam seperti banyak kita ketahui.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Baca Lebih Lanjut</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="{{asset('template/assets/images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid') }}">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">KENTANG STICK</h5>
                <p class="mb-4">kentang stick biasanya dihidangkan sebagai makanan ringan saat sedang bersantai
                  bersama keluarga atau nongkrong bersama teman teman.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Baca lebih lanjur</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="{{asset('template/assets/images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">BATAGOR CIANJUR</h5>
                <p class="mb-4">batagor salah satu makanan khas cianjur yang memiliki rasa enak,gurih dan lezat.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Baca Lebih Lanjut</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Contoh Contoh Makanan Yang Dijual</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="{{asset('template/assets/images/a.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/a.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="{{asset('template/assets/images/b.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/b.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="{{asset('template/assets/images/c.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/c.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="{{asset('template/assets/images/d.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/d.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="{{asset('template/assets/images/f.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/f.jpg" alt="Free Template by colorlib.com" class="img-fluid') }}">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="{{asset('template/assets/images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid') }}">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Mita</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('template/assets/js/jquery.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/popper.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/bootstrap.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('template/assets/js/jquery.waypoints.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/owl.carousel.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.magnific-popup.'min.js') }}"></script>
    <script src="js/bootstrap-datepicker.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.timepicker.'min.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.animateNumber.'min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('template/assets/js/google-map.js') }}"></script>
    <script src="{{asset('template/assets/js/main.js') }}"></script> 
  </body>
</html>