<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tracking Covid</title>
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

    

    <link rel="stylesheet" href="{{asset('template/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css') }}">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Tracking Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-offer" class="nav-link">Home</a></li>
            <!-- <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li> -->
            <li class="nav-item"><a href="#section-about" class="nav-link">Provinsi</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">Global</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Tentang</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Pencegahan</a></li>
            <!-- <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
	<section class="site-cover" style="background-image: url({{asset('template/assets//images/bg5.jpg') }});" id="section-offer"> >
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
          <h1 class="site-heading site-animate mb-3">Tracking Covid-19</h1>
            <div class="row justify-content-center">
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">
            <div class="item">
                <div class="media d-block mb-2 text-center site-media site-animate border-0">
                  <div class="media-body p-md-2 p-2">
                  <h3><b>Total Positif</b></h3>
                  <img src="{{asset('template/assets/images/sedih 3.png') }}" width="50px" align="left" alt="">
                    <center><p><h2><b>{{$positif}}</b></h2><h5> Orang</h5></p></center>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <div class="media-body p-md-2 p-2">
									<h3><b>Total Sembuh</b></h3>
								</a>
                <img src="{{asset('template/assets/images/senyum.png') }}" width="50px" align="left" alt="">
								<center><p><h2><b>{{$sembuh}}</b></h2><h5> Orang</h5></p></center>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <div class="media-body p-md-2 p-2">
									<h3><b>Total Meninggal</b></h3>
                  <img src="{{asset('template/assets/images/sedih.png') }}" width="50px" align="left" alt="">
								</a>
								<center><p><h2><b>{{$meninggal}}</b></h2><h5> Orang</h5></p></center>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
          
        </div>
      </div>
    </section>

    
    <section class="site-section" id="section-about">
      <div class="container">
	  <div class="col-md-12 text-center mb-5 site-animate">
	  <div class="card">
				    <div class="card-body">
				    <div class="table-responsive service">
					  <div class="card-header"><h4>Data Kasus Bedasarkan Provinsi</h4>
					   </div>
					   <div class="card-body>
					   <div style="height:600px;overflow:auto;margin-right:15px;">
					    <table class="table table-bordered table-striped mb-0" width="100%">
						  <thead>
						   <tr>
						     <th scope="col"><center><b>No</cneter></b></th>
							 <th scope="col"><center><b>Nama Provinsi</cneter></b></th>
							 <th scope="col"><center><b>Positif</cneter></b></th>
							 <th scope="col"><center><b>Sembuh</cneter></b></th>
							 <th scope="col"><center><b>Meninggal</cneter></b></th>
						   </tr>
						  </thead>
					   <tbody>
					   @php 
					      $no =1;
					   @endphp
					      @foreach($provinsi as $data)
						      <tr>
							     <td scope="row">{{$no++}}</td>
								 <td scope="row">{{$data->nama_provinsi}}</td>
								 <td scope="row">{{$data->positif}}</td>
                                 <td scope="row">{{$data->sembuh}}</td>
                                 <td scope="row">{{$data->meninggal}}</td>



							  </tr>
						   @endforeach
						</tbody>
					  </table>
					</div>
				 </div>
				</div>
			  </div>
			</div>
		   </div>
		  </div> 
		  </div>
</div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-news">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <?php
			  $data = file_get_contents("https://api.kawalcorona.com/");
			  $negara = json_decode($data, TRUE);
			   ?>
			     <div class="container">
				  <div class="card">
				    <div class="card-body">
				    <div class="table-responsive service">
					  <div class="card-header"><h4>Data Kasus Global</h4>
					   </div>
					   <div class="card-body">
					   <div style="height:600px;overflow:auto;margin-right:15px;">
					    <table class="table table-bordered table-striped mb-0" width="100%">
						  <thead>
						   <tr>
						     <th scope="col"><center><b>No</cneter></b></th>
							 <th scope="col"><center><b>Negara</cneter></b></th>
							 <th scope="col"><center><b>Positif</cneter></b></th>
							 <th scope="col"><center><b>Sembuh</cneter></b></th>
							 <th scope="col"><center><b>Meninggal</cneter></b></th>
						   </tr>
						  </thead>
					   <tbody>
					   @php 
					      $no =1;
					   @endphp
					      @foreach($negara as $data)
						      <tr>
							     <td scope="row">{{$no++}}</td>
								 <td scope="row">{{$data['attributes']['Country_Region']}}</td>
								 <td scope="row">{{$data['attributes']['Confirmed']}}</td>
								 <td scope="row">{{$data['attributes']['Recovered']}}</td>
                 <td scope="row">{{$data['attributes']['Deaths']}}</td>

							  </tr>
						   @endforeach
						</tbody>
					  </table>
					</div>
				 </div>
				</div>
			  </div>
			</div>
		   </div>
		  </div> 
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

          <div class="col-md-12  mb-5 site-animate">
            <h2 class="display-4">Tentang</h2>
              <div class="col-md-7">
                <br>
                <br>
                <h3><p>Apa Itu Virus Corona ?</p><h3>
                <p class="lead"> Virus corona atau COVID-19 adalah virus yang menyerang sistem pernapasan manusia.
                  virus ini masih berhubungan dengan penyebab SARS dan MERS yang sempat merebak beberapa tahun lalu.
                </p>
                <p class="lead"> virus Corona dapat menyebar dari orang ke orang melalui droplet dari hidung atau mulut yang keluar saat orang yang terjangkit virus Corona batuk atau napas (bersin). Droplet ini kemudian jatuh ke benda-benda dan permukaan di sekitarnya. Orang yang menyentuh benda atau permukaan tersebut lalu menyentuh mata, hidung, atau mulutnya dapat terjangkit virus Corona. Penularan virus Corona juga dapat terjadi jika orang menghirup droplet yang keluar dari batuk atau napas (bersin) orang yang terjangkit virus Corona. Karena itu, penting bagi kita untuk menjaga jarak lebih dari 1 meter dari orang yang sakit. WHO terus mengkaji perkembangan penelitian tentang cara 
                penyebaran virus Corona dan akan menyampaikan temuan-temuan terbaru,” dikutip dari Tempo.co.</p>
                <br>
              </div>
            </div>
          </div>
          <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/Batuk 1.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Batuk</h5>
                        <p>batuk terinfeksi virus corona dengan batuk pada umumnya bukanlah sembarang batuk. Profesor Kedokteran pencegahan dan penyakit menular di Vanderbilt University School of Medicine di Nashville, Tennessee, dr. William Schaffner mengatakan, batuk kering akibat terinfeksi virus corona terasa di dada.
                         </p>
                        <!-- Artikel ini telah tayang di Kompas.com dengan judul "Berikut 5 Gejala Virus Corona Ringan yang Tak Boleh Diabaikan", Klik untuk baca: https://www.kompas.com/tren/read/2020/03/26/173100365/berikut-5-gejala-virus-corona-ringan-yang-tak-boleh-diabaikan?page=all.
                        Penulis : Retia Kartika Dewi
                        Editor : Sari Hardiyanto

                        Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:
                        Android: https://bit.ly/3g85pkA
                        iOS: https://apple.co/3hXWJ0L</p> -->
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/demam1.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Demam</h5>
                        <p>Para ahli mengungkapkan, apabila seseorang memiliki suhu tubuh setidaknya 37,7 derajat celsius atau lebih yang dialami anak-anak atau orang dewasa itu baru disebut demam.

                          <!-- Artikel ini telah tayang di Kompas.com dengan judul "Berikut 5 Gejala Virus Corona Ringan yang Tak Boleh Diabaikan", Klik untuk baca: https://www.kompas.com/tren/read/2020/03/26/173100365/berikut-5-gejala-virus-corona-ringan-yang-tak-boleh-diabaikan?page=all.
                          Penulis : Retia Kartika Dewi
                          Editor : Sari Hardiyanto

                          Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:
                          Android: https://bit.ly/3g85pkA
                          iOS: https://apple.co/3hXWJ0L</p> -->
                      </div>
                    </div>
                    <br>
                    <br>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/Letih.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Badan Terasa Letih Dan Lesu</h5>
                        <p>jika tiba tiba merasa lemas, namun tetap makan dan minum secara normal, maka kondisi ini harus segera di laporkan 
                        ke rumah sakit. kelelahan ini disebabkan berkurangnya oksigen di organ, sehingga anda harus segera ke rumah sakit untuk mendapatkan
                        pengobatan pengobatan yang tepat.
                        </p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/Sesak Nafas.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Sesak Nafas</h5>
                        <p>Merasakan kesulitan bernapas menjadi gejala ketiga dari pasien virus corona yang harus 
                          diwaspadai.Jika dada Anda menjadi ketat atau Anda merasa seolah-olah Anda tidak bisa bernapas cukup dalam untuk mendapatkan napas yang baik, itu pertanda Anda harus mendapatkan tindakan yang serius.

                        <!-- Artikel ini telah tayang di Kompas.com dengan judul "Berikut 5 Gejala Virus Corona Ringan yang Tak Boleh Diabaikan", Klik untuk baca: https://www.kompas.com/tren/read/2020/03/26/173100365/berikut-5-gejala-virus-corona-ringan-yang-tak-boleh-diabaikan?page=all.
                        Penulis : Retia Kartika Dewi
                        Editor : Sari Hardiyanto

                        Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:
                        Android: https://bit.ly/3g85pkA
                        iOS: https://apple.co/3hXWJ0L </p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>        
                  </div>
                </div>
              </div>
            </div>


          
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Langkah Penting Mencegah Virus Corona</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Stay Safe And Stay Healty</p>
              </div>
            </div>
          </div>


            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/rumah.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Dirumah Aja</h5>
                        <p>tetap di rumah menjadi kunci agar tidak terjadi paparan virus yang lebih banyak lagi kepada kita</p>
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/jarak.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Menjaga Jarak</h5>
                        <p>Selalu jaga jarak dan hindari kontak dekat dari orang lain yang sedang sakit. Selain itu, jangan memegang binatang peliharaan ataupun hewan lain saat sakit.</p>
                      </div>
                    </div>
                    <br>
                    <br>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/cuci.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Mencuci Tangan</h5>
                        <p>Cuci tangan lebih sering dengan menggunakan sabun dan air setidaknya 20 detik. Jika sabun dan air tidak tersedia, 
                          cucilah tangan dengan pembersih tangan yang mengandung setidaknya 60% alkohol.</p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="{{asset('template/assets/images/masker1.png') }}" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Memakai Masker</h5>
                        <p>Gunakan masker saat berada di sekitar orang lain, binatang peliharaan, atau jika akan tempat publik. Jika Anda tidak dapat menggunakan masker, orang yang tinggal bersama 
                          Anda tidak diperbolehkan untuk berada dalam ruangan yang sama. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>        
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <!-- EnD section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          
        </div>
      </div>
    </section>
    <div id="map"></div>
    <!-- END section -->
    

    <!-- <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>Apa Itu Virus Corona ?</p><h3>
                <p class="lead"> Virus corona atau COVID-19 adalah virus yang menyerang sistem pernapasan manusia.
                  virus ini masih berhubungan dengan penyebab SARS dan MERS yang sempat merebak beberapa tahun lalu.</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
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
          </div> -->
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
                <h1 class="mb-4">Reserve A Table</h1>  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
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


    <script src="{{asset('template/assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('template/assets/js/popper.min.js') }}"></script>
    <script src="{{asset('template/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('template/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{asset('template/assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{asset('template/assets/js/jquery.timepicker.min.js') }}"></script>
    
    <script src="{{asset('template/assets/js/jquery.animateNumber.min.js') }}"></script>
    

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <!-- <script src="{{asset('template/assets/js/google-map.js') }}"></script> -->

    <script src="{{asset('template/assets/js/main.js') }}"></script>

    
  </body>
</html>