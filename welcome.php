<?php 
include('header.php');
$con = mysqli_connect("localhost","root","","hmusic");

$q="SELECT * FROM songs";
$res = mysqli_query($con,$q);
?>       




			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/download.jpg"  alt="Girl in a jacket" width="1920" height="1000">
>
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> WELCOME to SOUND</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b1.jpg" height="1000" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
								</div>
							</div>
						</div>
                    </div>
                    

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
				<!-- block for animate navigation menu -->
				<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad" style="background-image: url('img/banner/d3.jpg');">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2 style="color:white">Latest Songs</h2>
						<hr>
						<!-- paragraph -->
						<p style="color:white">We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="img/album/1.jpg" alt="" />
									<!-- disk image -->
									<img class="img-responsive disk" src="img/album/disk.png" alt="" />
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4 style="color:white">Perfect Melodi</h4>
									<!-- composed by -->
									<h5 style="color:white">By Usman</h5>
									<!-- paragraph -->
									<p style="color:white">For better music experience join us for free enjoy the music ever</p>
									<!-- button -->
									<a href="Joinus.php" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Join Us Now</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										
										<?php 
												while($row = mysqli_fetch_assoc($res))
												{?>

										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
											
											
												<!-- song title -->
												<h4><?php echo $row['song_name']; ?></h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<audio class="playback"  controls='controls' preload="none"><source src="Songs/akcent1.mp3" type="audio/mpeg">
												<i class="fa fa-play"></i>
												</audio>

												<!---<a href="#"><i class="fa fa-play"></i></a> 
												<a href="#"><i class="fa fa-pause"></i></a> -->
											</div>
											<div class="clearfix"></div>
										<?php }
											
											?>
										</li>
																			</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--/ hero end -->
<?php
            include('footer.php');
?>