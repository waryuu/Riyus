<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Riyus </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/book-icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-01.css" rel="stylesheet">

  <!-- Custom-Files -->
  <link rel="stylesheet" href="css/bootstrapbeli.css">
  <link rel="stylesheet" href="css/agency.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/stylebeli.css" type="text/css" media="all" />

  

  
</head>

<body>
  <!--==========================Header============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="http://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="http://instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="/" class="scrollto"><span>Riyus</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

     <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          
          
          <li class="drop-down"><a href=""><i class="fa fa-person" aria-hidden="true"></i></a>
            <ul>
              
                
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        
                                    </form>
                                    
                                </div>
                            </li>
              
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            </form> 
              </a>
              
              
              
              
              
              </li>
            </ul>
          </li>
          <li><a href="#footer">KONTAK KAMI</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Riyus<br>Tidak ada <span>yang setia seperti buku</span></h2>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/beli-01.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

                
  <div id="example1" class="row">
                <div class="container py-md-3">
        <h3 class="midnight-city text-uppercase text-left">
          Nama: {{ Auth::user()->name }} <span class="caret"></span>
        </h3>
              <h3 class="midnight-city text-uppercase text-left">
                Lokasi: {{ Auth::user()->address }} <span class="caret"></span>
                </h3>
                
                
                <div class="uploadbox text-right">
                <h3 class="midnight-city text-uppercase text-right">
                  <a href="{{ url('/upload') }}" class="btn-get-started scrollto">
                  <strong>TAMBAH BARANG</strong></a>
                </h3>
              </div>
              
  <!--================Data Jual=====================-->

  <section >
  <div id="example1" class="row">
        @foreach($item->all() as $i)
        
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100" >
              <div class="img-frame center">
              <a href="/"><img class="card-img-top img-responsive img-cover" src="{{url('/data_file')}}/{{ $i->file }}" alt=""></a>
              
            </div>
              <div class="card-body">
               </a>
                  <table id="example1">
                    <tr>
                     <td><a href="/"> <font size=2 class="card-title text-dark"> <b> {{str_limit($i->nama_buku, 70, '...')}} </b></font></a></td>
                   </tr>
                      <tr>
                          <td><font size=1 class="text-muted">{{$i->harga}}</font></td>
                        </tr>
                    <tr>
                        <td><a href='{{ url("/editbuku") }}'> <font size=2 class="card-title text-dark"> <b> Edit </b></font></a></td>
                   </tr> 
                  </table>
              </div>
            </div>
          </div>
      
        @endforeach  
      
    </div>
    <!----=========================================================-->
    
                    </section>
          
                    
    
 <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Riyus</h3>
                    <p>Riyus merupakan aplikasi yang mengutamakan penjualan buku bekas dengan sistem penjualan online. Setiap orang apabila memiliki buku yang sudah tidak terpakai dan sudah tidak dibaca dapat menjualnya melalui aplikasi ini.</p>
                  </div>

                  

                </div>

                <div class="col-sm-6">
                  
                  <div class="footer-links">
                    <h4>Kontak Kami</h4>
                    <p>
                      Dramaga, IPB <br>
                      Bogor, 021-7372578<br>
                      Indonesia <br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  </div>

                </div>

            </div>

          </div>

          

          </div>

          

        </div>

      </div>
    </div>

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>