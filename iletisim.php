<?php

 require_once('header.php');
 ?>
		<!-- END HEADER -->


		<!-- BEGIN HEADER BACKGROUND -->
		<div class="header-background-box half">
			<div class="header-background" data-image-src="images/content/contact_header_background.jpg">
				<div class="webkit-and-moz-overlay-background">
					<div class="container">
						<div class="center-section">
							<h2 class="section-title-border">İletisim</h2>
						
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
				<a href="iletisim.php">İletisim</a>
			</div>
		</div>
		<!-- END SITE MAP -->

		<!-- BEGIN CONTACT SECTION-->
		<section class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="contact-loacation col-md-6">
									<h3>Adres</h3>
									<p><i class="fa fa-map-marker"></i> <?php echo $ayarcek['ayar_adres']; ?><br><?php echo $ayarcek['ayar_adres2']; ?> <br><?php echo $ayarcek['ayar_adres3']; ?> <br><?php echo $ayarcek['ayar_adres4']; ?></p>
							</div>
						 <div class="contact-drect col-md-6">
								<h3>İletişim</h3>
								<p><i class="fa fa-phone"></i> <?php echo $ayarcek['ayar_tel']; ?> <br><?php echo $ayarcek['ayar_gsm'];?></p>
								<p><i class="fa fa-fax"></i> <?php echo  $ayarcek['ayar_faks'] ?></p>
								<p><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a></p>
						</div>
						<div class="contact-socials col-md-6 ">
							<h3>Sosyal Ağlar</h3>
							<ul class="socials-box">
								<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
								<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
								<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<form action="baglan/islem.php" method="POST" id="demo-form2" data-parsley-validate >
 								<div class="col-md-12">
 									<div class="form-group"> <!-- Name field !-->
 										<input type="text" id="name" name="iletisim_isim" required="required" class="form-control" placeholder="Your Name *" >
 									</div>
 								</div>
 								<div class="col-md-12">
 									<div class="form-group"> <!-- Email field !-->
 										<input type="email" id="email" name="iletisim_mail" required="required" class="form-control" placeholder="Your Email *">
 									</div>
 								</div>
 								<div class="col-md-12">
 									<div class="form-group"> <!-- Phone field !-->
 										<input type="number" class="form-control" id="phone" required="required" name="iletisim_tel" placeholder="Your Phone">
 									</div>
 								</div>
 								<div class="col-md-12">
 									<div class="form-group"> <!-- Message field !-->
 										<textarea cols="6" rows="5" class="form-control" id="comments" required="required" name="iletisim_mesaj" placeholder="Your Message" maxlength="250"></textarea>
 									</div>
 								</div>
 								<div class="col-md-12">
 									 <!-- Submit button !-->
 									 <div class="center-position">
 										
 										<button type="submit" name="iletisimekle" id="rv-submit" class="btn btn-primary center-button edit-marginTop20">Mesaj Gönder</button>
 									</div>
 								</div>
 							</form>
 							<?php 

              if ($_GET['durum']=="ok") {?>

              <?php echo '<script type = "text/javascript"> swal("Başarılı", "Mesajınız Gönderilmiştir.", "success");</script>'; ?>


              <?php } elseif ($_GET['durum']=="no") {?>

            <?php echo '<script type = "text/javascript"> swal("HATA", "Mesajınız Gönderilemedi", "error");</script>'; ?>

              <?php }

              ?>
 							<div class="col-md-12">
 								<div id="message"></div>
 							</div>
					</div>
				</div>
			</div>
		</section>

		<div class="contact-map">
			<?php echo  $ayarcek['ayar_maps'] ?>

		</div>
		<!-- END CONTACT SECTION -->

		<!-- BEGIN NEWSLETTER  -->
		
		<!-- END NEWSLETTER  -->

		<!--BEGIN FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Libs -->
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
	<!-- Contact Script and Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvKU2NZAsNhdlqbhpgOfoDmR-VVi501nI&amp;callback=initMap" type="text/javascript"></script>
	<script type="text/javascript" src="js/contact.js"></script>
	<script type="text/javascript" src="js/contact-mail.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>
