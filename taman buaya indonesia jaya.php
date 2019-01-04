<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Wisata Bekasi</title>

      <!-- Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
      <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 80%; margin: auto;}</style>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="style.css" rel="stylesheet"/>
      <script src="bootstrap/js/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#div1").fadeToggle();
                $("#div2").fadeToggle("slow");
                $("#div3").fadeToggle(1500);
                $("#div4").fadeToggle(2000);
                $("#div5").fadeToggle(3000);
            });
        });
      </script>
      <script> 
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
      </script>
    </head>
      <body> 
        
        <div class="container">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WISATA BEKASI</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php"><span class="label label-success">Sejarah Bekasi</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata Alam <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li role="separator" class="divider"></li>
                      <li><a href="bumi perkemahan karang kitri.php">Bumi Perkemahan Karang Kitri</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="curug parigi.php">Curug Parigi</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata Bahari <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li role="separator" class="divider"></li>
                      <li><a href="hutan mangrove.php">Hutang Mangrove</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="pantai muara beting.php">Pantai Muara Beting</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata Cagar Budaya <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li role="separator" class="divider"></li>
                      <li><a href="taman buaya indonesia jaya.php">Taman Buaya Indonesia Jaya</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata Religi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li role="separator" class="divider"></li>
                      <li><a href="masjid agung al barkah.php">Masjid Agung Al Barkah</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="pura agung tirta bhuana.php">Pura Agung Tirta Bhuana</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="vihara dharma jaya.php">Vihara Dharma Jaya</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata Sejarah <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li role="separator" class="divider"></li>
                      <li><a href="gedung juang.php">Gedung Juang</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="saung ranggon.php">Saung Ranggon</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                  <li class="active"><a href="masuk/index.php"><span class="label label-success">ADMIN</span></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>

        <div class="container">
          <div id="atas" class="col-md-12" align="center">
            <br>
             <div id="WJSlider" class="carousel slide" data-ride="carousel">
               <!-- Indikator yang bulat bulat ituloh gan-->
              <ol class="carousel-indicators">
                <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
                <li data-target="#WJSlider" data-slide-to="1"></li>
                <li data-target="#WJSlider" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper untuk slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="gambar/wisata cagar/tb1.jpg" alt="slide1" width="100" height="100">
                  <div class="carousel-caption">
                    <h3>TAMAN BUAYA INDONESIA JAYA</h3>
                    <p>Desa Sukaragam, Kecamatan Serang Baru</p>
                  </div>
                </div>

                <div class="item">
                  <img src="gambar/wisata cagar/tb2.jpg" alt="slide2" width="100" height="100">
                  <div class="carousel-caption">
                    <h3>TAMAN BUAYA INDONESIA JAYA</h3>
                    <p>Desa Sukaragam, Kecamatan Serang Baru</p>
                  </div>
                </div>

                <div class="item">
                  <img src="gambar/wisata cagar/tb3.jpg" alt="slide3" width="100" height="100">
                  <div class="carousel-caption">
                    <h3>TAMAN BUAYA INDONESIA JAYA</h3>
                    <p>Desa Sukaragam, Kecamatan Serang Baru</p>
                  </div>
                </div>
              </div>

              <!-- Kode untuk Navigasi -->
              <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Kembali</span>
              </a>
              <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Lanjut</span>
              </a>
            </div>
            <br>
          </div>
        </div>

        <div class="container">
          <div id="c">
            <div id =kiri class="col-md-6">
              <br>
              <div id=tiket>
                <button><h4 align="center"><strong>TIKET MASUK & JAM BUKA</strong></h4></button>
                <br>
                <div id=div1 style="display:none;"><p>Anak-anak = Rp 20.000</p></div>
                <div id=div2 style="display:none;"><p>Dewasa = Rp 30.000</p></div>
                <div id=div3 style="display:none;"><p>Parkir motor = Rp 2.000</p></div>
                <div id=div4 style="display:none;"><p>Parkir mobil = Rp 3.000</p></div>
                <div id=div5 style="display:none;"><p>Jam buka = 8:00 s.d 17:00 WIB</p></div>
              </div>

              <br>
              <div id="flip">
                <h3 align="center"><strong>ULASAN</strong></h3>
              </div>
              <div id="panel">
                <p>Lokasi  wisata Taman Buaya Indonesia Jaya di Sukaragam Bekasi Jawa Barat terletak di Desa Sukaragam, Kecamatan Serang Baru, Kabupaten Bekasi, Provinsi jawa barat.</p>  
                <p>Di Taman Buaya Indonesia Jaya juga diselenggarakan pertunjukan atraksi debus Banten, buaya, dan ular, namun hanya pada hari libur, yaitu pada pukul 11.00 dan 14.00. Taman Buaya Indonesia Jaya dibangun awal tahun 1990. Taman Buaya Indonesia Jaya pada hari biasa  tidak terlalu ramai dikunjungi wisatawan. Mungkin karena hari atraksi adalah hari Minggu/ Libur. Konon, pada hari atraksi itu, para pawang bermain-main dengan buaya, dan atraksi memberi makan buaya. Sementara di panggung lain, ditampilkan pula atraksi debus. Selebihnya, sajiannya sama dengan hari-hari lain yaitu menonton para buaya bermalas-malasan.</p>
                <p>Selain itu juga ada buaya Albino, Buaya Buntung, Buaya Muara, Buaya Irian, dll. Di Taman Buaya Indonesia Jaya tersedia pula wahana mainan anak seperti ayunan, jungkat-jungkit, dll dengan jumlah yang cukup banyak. Tempatnya teduh dengan pepohonan yang cukup rindang, serta ada beberapa bale-bale yang bisa dipakai untuk melepas lelah.</p>
              </div>
            <br>
            </div>

            <div id =kanan class="col-md-6">
              <br>
              <form id="formkomentar" action="input tbij.php" method="post">
                <div>
                   <input type="text" name="nama" placeholder="Nama" />
                </div>
                <div>
                  <input type="email" name="email" placeholder="Email" />
                </div>
                <div>
                  <textarea name="komen" rows="10" placeholder="Komentar"></textarea>
                </div>
                <div>
                  <input type="submit" name="post" value="Tambahkan Komentar"/>
                </div> 
            </form>
              <hr><p><h2>KOMENTAR</h2></p>
              <?php include"lihat.php"; ?>
            </div>

            <div id=bawah class="col-md-12">
              <br>
              <h2 align="center"><strong>LOKASI</strong><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0070845812506!2d107.10109381432203!3d-6.393086564307851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999dfb81d8e33%3A0xc5d7b61263a9d7ba!2sTaman+Buaya+Indonesia+Jaya!5e0!3m2!1sen!2sin!4v1498846026870" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></h2>
            </div>
          </div>
          <img src="gambar/footer.jpg" width=100%> 
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
      </body>
</html>