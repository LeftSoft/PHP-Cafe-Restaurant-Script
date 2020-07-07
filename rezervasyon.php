<?php

 require_once('header.php');
 ?>

									
		<!-- END HEADER -->


		<!-- BEGIN HEADER BACKGROUND -->
		<div class="header-background-box half">
			<div class="header-background" data-image-src="images/content/reservation_header_background.jpg">
				<div class="webkit-and-moz-overlay-background">
					<div class="container">
						<div class="center-section">
							<h2 class="section-title-border whiteTitleBorder">Rezervasyon</h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END HEADER BACKGROUND -->

		<!-- BEGIN SITE MAP -->
		<div class="site-map">
			<div class="container">
				<a href="index.php">Anasayfa</a>
				<a href="rezervasyon.php">Rezervasyon</a>
			</div>
		</div>
		<!-- END SITE MAP -->

		<!-- BEGIN RESERVATION  -->
		<section class="reservation">
				<div class="container">
					
					
						<form action="baglan/islem.php" method="POST" id="demo-form2" data-parsley-validate >
							<div class="row">
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Name field !-->
										<input type="text" id="rv-name" name="rez_ad" class="form-control" placeholder="Full Name *" required="required">
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Phone field !-->
										<input type="number" id="rv-phone" name="rez_tel" class="form-control"  placeholder="Your Phone Number *" required="required">
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Email field !-->
										<input type="email" id="rv-email" name="rez_email" class="form-control"  placeholder="Your Email *" required="required">
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Guests field !-->
										<input type="number" id="rv-guests" name="rez_kisi" class="form-control"  min="1" placeholder="Guests *" required="required">
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Date field !-->
										<div class="input-group date" id="dp-date">
												<input type="text" id="rv-date" name="rez_tarih" class="form-control" placeholder="Date" required="required">
												<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar">
														</span>
												</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="form-group"> <!-- Time field !-->
										<div class="input-group date" id="dp-time">
											<input type="text" id="rv-time" name="rez_zaman" class="form-control" placeholder="Time" required="required">
											<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="center-button edit-marginTop30"> <!-- Submit button !-->
								<button type="submit" name="rezervasyonekle" id="rv-submit" class="btn btn-primary">Rezervasyon Yap</button>
							</div>
							<?php 

              if ($_GET['durum']=="ok") {?>
              	<?php echo '<script type = "text/javascript"> swal("Reservasyon Başarılı", "Reservasyon Kaydınız Yapılmıştır", "success");</script>'; ?>


              <?php } elseif ($_GET['durum']=="no") {?>
<?php echo '<script type = "text/javascript"> swal("HATA", "Reservasyon Başarısız", "error");</script>'; ?>

              <?php }

              ?>

						</form>
						<div id="rv-message"></div>
				</div>
		</section>
		<!-- END RESERVATION  -->

		<!-- RESERVATION CALL  -->
		<section class="call-reservation">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="call-box">
							<h3 class="title">Rezervasyon yaptırmak için de arayabilirsiniz.</h3>
							<span class="phone"><?php echo $ayarcek['ayar_tel'];?></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END RESERVATION CALL  -->

	<!-- BEST SERVICE NOW  -->
	
	<!-- END BEST SERVICE  -->

		<!-- BEGIN CERTIFICATES  -->
		
		<!-- END SERTIFICATES  -->

		<!-- BEGIN NEWSLETTER  -->
		
		<!-- END NEWSLETTER  -->

		<!--BEGIN FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Libs -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/common/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/bootstrap-progressbar.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Datepiker Script -->
	<script type="text/javascript" src="js/datepiker/js/moment.js"></script>
	<script type="text/javascript" src="js/datepiker/js/bootstrap-datepicker.js"></script>
	<!-- Hero Slide Scripts -->
	<script type="text/javascript" src="js/xpro/js/slider.js"></script>
	<!-- Template Scripts -->
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/contact-mail.js"></script>

</body>

</html>
