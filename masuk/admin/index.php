<?php include('akses.php'); ?>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <!-- Bootstrap -->
      <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="../../style.css" rel="stylesheet"/>
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
                <a class="navbar-brand" href="#">INI ADMIN</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="../logout.php"><span class="label label-success">LOGOUT</span></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
 
        <div id="c">
        	<div id="admin" class="col-md-12" align="center">
            <br>
        		<div style="text-align:center">
    					<h2>Admin Area</h2>
    					<p>Selamat datang di Halaman Admin  <?php echo $_SESSION['admin']; ?></p>
				    </div>
            <br>
          </div>
          
          <div id="kiri" class="col-md-6">
            <br>
              <form id="formkomentar" action="input admin.php" method="post">
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
          </div>
          <div id="kanan" class="col-md-6">
                <hr><p><h2>KOMENTAR</h2></p>
                <?php include"lihat admin.php"; ?>
          </div>
        </div>
      </div>
 		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>