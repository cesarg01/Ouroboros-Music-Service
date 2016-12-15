<?php
namespace stormwind\hw3\views;

require_once('view.php');


//echo "<link rel='stylesheet'href='https://bootswatch.com/superhero/bootstrap.min.css'>";

class LandingView extends View{
	public function render($data){


		if (isset($_REQUEST['name'])) {
		 	echo $_REQUEST['name'];
		 }


		?>
		<<head>

		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <title>Ouroboros Music Service</title>

		    <!-- Bootstrap Core CSS -->
		    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		    <!-- Custom Fonts -->
		    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		    <!-- Plugin CSS -->
		    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

		    <!-- Theme CSS -->
		    <link href="css/creative.min.css" rel="stylesheet">

		    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->

		</head>

		<body id="page-top">

		    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		        <div class="container-fluid">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
		                </button>

		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav navbar-right">
		                    <li>
		                        <a class="page-scroll" href="#members">Members</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#relations">Relations</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#queries">Queries</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#ad-hoc">Ad-hoc Query</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#aboutus">About Us</a>
		                    </li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container-fluid -->
		    </nav>

		    <header>
		        <div class="header-content">
		            <div class="header-content-inner">
		                <h1 id="homeHeading">Ouroboros</h1>
		                <hr>
		                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
		                <a href="#member" class="btn btn-primary btn-xl page-scroll">Members</a>
		            </div>
		        </div>
		    </header>

		    <section class="bg-primary" id="members">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 text-center">
		                    <h2 class="section-heading">Ouroboros Members</h2>
		                    <hr class="light">
		                    <p class="text-faded">Cesar Gonzalez<br> Nanthana Thanonklin <br> Paul Vu <br>
		                    	Rong Wang <br> Yulong Chen</p>
		                    <a href="#relations" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
		                </div>
		            </div>
		        </div>
		    </section>







				<section id="relations">
						<div class="container">
								<div class="row">
										<div class="col-lg-12 text-center">
												<h2 class="section-heading">Relations</h2>
												<hr class="primary">
										</div>
								</div>
						</div>

						<div class="container">
								<div class="row">

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
														<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=RecordLabel">RecordLabel( labelID : integer, name: string, address: string)</a>
												</div>
										</div>
										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
														<i class="fa fa-4x fa-circle text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=RAHas">RAHas( labelID : integer,  artistID : integer)</a>
												</div>
										</div>
										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
														<i class="fa fa-4x fa-tree text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=Artist">Artist( artistID : integer, name: string)</a>
												</div>
										</div>
										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
														<i class="fa fa-4x fa-heart text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=SoloArtist">SoloArtist( artistID : integer, birthdate: date)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-database text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=GroupArtist">GroupArtist( artistID : integer, formationDate: date)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-music text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=AACreate">AACreate(artistID: integer,  albumID : integer)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-flash text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=Album">Album( albumID : integer, name: string, yearPublish: date)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-gamepad text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=ATHas">ATHas( albumID : integer,  releaseDate : date,  trackName : string)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-hand-peace-o text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=Track">Track( releaseDate : date,  trackName : string, length: integer, genre: string)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-mobile text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=PTHas">PTHas( listID : integer,  releaseDate :date,  trackName :string)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-rocket text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=Playlist">Playlist( listID : integer, listName: string)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-4x fa-smile-o text-primary sr-icons"></i>
														<br>
														<a href="index.php?method=all&name=Users">Users( userID : integer, name: string, gender: string, photo: BLOB)</a>
												</div>
										</div>

										<div class="col-lg-3 col-md-6 text-center">
												<div class="service-box">
													<i class="fa fa-gear fa-spin fa-3x fa-fw"></i>
														<br>
														<a href="index.php?method=all&name=Listen">Listen( userID : integer,  listID : integer)</a>
												</div>
										</div>

								</div>
						</div>
				</section>



				<section class="bg-dark" id="queries">
 	         <div class="container text-center">
 	             <div class="call-to-action">
 	                 <h2>Queries</h2>
 	                 <ol>
 	               	<?php
 	               	$url = urlencode("SELECT album.name AS name1, artist.name AS name2 FROM album, artist, aacreate WHERE yearPublish > '1980-01-01'  AND album.albumID=aacreate.albumID AND aacreate.artistID=artist.artistId");
 	               	echo "<li><a href='index.php?method=query&name=$url'>Query1: </a>Find out the names of the Albums and the corresponding Artist that published the Album later than 1980-01-01:</li>";

 	               	$url = urlencode("SELECT SUM(track.length) FROM track, album, athas WHERE album.yearPublish>'1980-01-01' AND track.releaseDate=athas.releaseDate AND track.trackName=athas.trackName AND album.albumID=athas.albumID");

 	               	echo "<li><a href='index.php?method=query&name=$url'>Query2: </a>Find out the total length of the tracks that belong to the albums published later than 1980-01-01</li>";



 	               	$url = urlencode("SELECT album.name FROM album, track, athas WHERE album.albumID=athas.albumID AND track.releaseDate=athas.releaseDate AND track.trackName=athas.trackName AND track.trackName IN (SELECT pthas.trackName FROM pthas, playlist,track WHERE playlist.listName='Roadtrip Pop' AND playlist.listID=pthas.listID AND track.releaseDate=pthas.releaseDate AND track.releaseDate=pthas.releaseDate);");

 	               	echo "<li><a href='index.php?method=query&name=$url'>Query3: </a>Find out the album name that has the track in a playlist named ‘Roadtrip Pop’</li>";



 	               	$url = urlencode("SELECT name, listName, trackName FROM Users, Playlist, Track WHERE name LIKE '%gar%'  AND listName LIKE  '%90s%' GROUP BY listName");

 	               	echo "<li><a href='index.php?method=query&name=$url'>Query4: </a>Find out which user is listen to what track with the name has “gar” in it and they are listen to music in 90s</li>";

 	               	$url = urlencode("SELECT COUNT(DISTINCT(labelID)) FROM RAHas");

 	               	echo "<li><a href='index.php?method=query&name=$url'>Query5: </a>Select and count how many unique labelID from the relation between RecordLabel Table and Artist Table</li>"

 	               	?>
 	               	</ol>
 	                 <a href="#ad-hoc" class="page-scroll btn btn-default btn-xl sr-button">Ad-hoc Query</a>
 	             </div>
 	         </div>
 	     </section>



			 <hr>

			     <aside class="bg-dark" id="ad-hoc">
			         <div class="container text-center">
			             <div class="call-to-action">
			                 <h2>Ad-hoc Query</h2>

			                 <form method="get" action="index.php?" class="form-horizontal">
			               		<input type="hidden" name="method" value="query">
			               		<div class="form-group">
			               		<label for="textArea" class="col-lg-2 control-label">We allow Select, Update, Deletes, Show, and complex SQL statements</label>
			               		<div class="col-lg-12">
			               		<textarea name="name" rows="9" cols="50" id="textArea" placeholder="Please Enter Your Query Here"></textarea>
			               		<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
			                     </div>
			                   </div>
			                   <div class="form-group">
			                     <div class="col-lg-12 col-lg-offset-2">
			               		<input type='reset' value = 'Clear' class="btn btn-default btn-x1 sr-button">
			               		<input type='submit' value = 'Submit' class="btn btn-primary btn-x1 sr-button">
			               		 </div>
			                   </div>
			               	</form>

			                 <a href="#aboutus" class="page-scroll btn btn-default btn-xl sr-button">About Us</a>
			             </div>
			         </div>
			     </aside>

					 <section id="aboutus">
			         <div class="container">
			             <div class="row">
			                 <div class="col-lg-8 col-lg-offset-2 text-center">
			                     <h2 class="section-heading">Let's Get In Touch!</h2>
			                     <hr class="primary">
			                     <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
			                 </div>
			                 <div class="col-lg-4 col-lg-offset-2 text-center">
			                     <i class="fa fa-phone fa-3x sr-contact"></i>
			                     <p>123-456-6789</p>
			                 </div>
			                 <div class="col-lg-4 text-center">
			                     <i class="fa fa-envelope-o fa-3x sr-contact"></i>
			                     <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
			                 </div>
			             </div>
			         </div>
			     </section>



	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Theme JavaScript -->
	<script src="js/creative.min.js"></script>

</body>


	<?php



	}
}
?>
