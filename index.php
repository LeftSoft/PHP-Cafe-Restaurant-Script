<?php

 require_once('header.php');



 ?>
		<!-- END HEADER -->

<div class="xpro-slider-container video-background">
				 <div id="scroller" class="xpro-slider">
						 <div class="xpro-slider-content">
	<?php 

		$slidersor=$db->prepare("SELECT * FROM slider where slider_durum='1' ORDER BY slider_sira ASC");
		$slidersor->execute();

		while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {

		 ?>
									<!--ON Slider Item -->
								 <div class="xpro-slider-item">

									 <video autoplay="autoplay" loop="loop" poster="<?php $slidercek['slider_poster'] ?>">
                         <source src="<?php echo $slidercek['slider_resimyol'] ?>" type="video/mp4">
                         
                     </video>

										 <div class="xpro-item-layer p-slide-overlay" data-effect="animate({'delay':'0.5s', 'duration':'1s'})"></div>

										 <div class="xpro-item-layer p-intro-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1s', 'duration':'600ms'})">
												  <div class="logointro">
														 <img src="<?php echo $slidercek['slider_ico'] ?>" alt=""/>
												 </div>

										 </div>

										 <div class="xpro-item-layer p-text-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1.6s', 'duration':'600ms'})">
												 <h1 class="xpro-item-layer-responsive xp-headtext"><?php echo $slidercek['slider_ad'] ?></h1>
												
										 </div>
								 </div>

<?php } ?>




 </div>
				 </div>
		 </div>








	
	

		<!-- BEGIN ABOUT US  -->
		<section class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h2>
						<div class="section-subtitle"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></div>
						</section>
		<!-- END ABOUT -->

		<!-- BEGIN SPECIAL MENU  -->
		<section class="special-menu parallax-box">
			<div class="mediaSection-box">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h2 class="section-title-border">Özel MEnü</h2>
						
								<div class="owl-carousel special-menu-slider"> <!-- On special-menu list  -->
									<?php 
			$sql=$db->prepare("SELECT * FROM yemek_menu where ozel_menu=:ozel_menu");
			$sql->execute(array(
				'ozel_menu' => 1
				));

			
			while($ozelyemek=$sql->fetch(PDO::FETCH_ASSOC)) {
					$menu_id=$ozelyemek['food_menu_id'];
					$urunfotosor=$db->prepare("SELECT * FROM ozel_menu_foto where ozel_menu_id=:ozel_menu_id");
					$urunfotosor->execute(array(
						'ozel_menu_id' => $menu_id
						));

					$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);
					
				?>
				
								<div class="item-frame-box"><!-- On item  -->
									<div class="item-bg-box">
										<div class="image"><img src="<?php echo $urunfotocek['ozel_menu_resim'] ?>" alt=""></div>
										<div class="info">
											<h3 class="section-title-border text-uppercase"><?php echo $ozelyemek['food_menu_name'] ?></h3>
											<p><?php echo $ozelyemek['food_menu_description'] ?></p>
											<center><span class="item-price"><?php echo $ozelyemek['food_menu_price'] ?>₺</span></center>
											
										</div>
									</div>
								</div><!-- OFF item  -->
								
								
								<?php } ?>
								
							</div><!-- OFF special-menu list  -->
						</div>
					</div><!-- Off row  -->
				</div>
			</div>
		</section>
		<!-- END SPECIAL MENU  -->

		<!-- MENU OF THE DAY -->


<section class="menu-list-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<hr>
						<ul class="menu-button-filter edit-marginTop40">
								<li data-filter="*" class="tagsort-active">
									<div class="iconBox-icon center-block"><i class="glyph-icon flaticon-bell"></i></div>
									<span class="r-name">Tümü</span></li>
								
							</ul>
							<div class="row menu-items-list">
								<?php 
			$yemek=$db->prepare("SELECT * FROM yemek_menu");
			$yemek->execute();

			
			while($uruncek=$yemek->fetch(PDO::FETCH_ASSOC)) {

				?>
									<div class="menu-item col-sm-6 col-xs-12 starter">

										<div class="clearfix menu-wrapper">
											<h3 class="title manuscript"><?php echo $uruncek['food_menu_name'] ?></h3>
											<span class="price"><?php echo $uruncek['food_menu_price'] ?>₺</span>
											<div class="desc"><p><?php echo $uruncek['food_menu_description'] ?></p></div>
										</div>
									</div>
									<?php } ?>
								</div>
					</div>
				</div>
			</div>
	</section>


	<!-- END MENU OF THE DAY -->

	<!-- RESERVATION NOW  -->
	<section class="reservation-now parallax-box">
		<div class="mediaSection-box">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6 col-xs-12">
						<div class="reservation-form-box">
							<h3 class="title manuscript">Book Your Table</h3>
							<h2 class="section-title-border">Reservation Now</h2>

							<form action="baglan/islem.php" method="POST" id="demo-form2" data-parsley-validate >
								<div class="form-group"> <!-- Name field !-->
									<input type="text" class="form-control" id="rv-name" name="rez_ad" placeholder="Full Name" required="required">
								</div>
								<div class="form-group"> <!-- Phone field !-->
									<input type="number" class="form-control" id="rv-phone" name="rez_tel" placeholder="Your Phone Number" required="required" maxlength="11">
								</div>
								<div class="form-group"> <!-- Email field !-->
									<input type="email" class="form-control" id="rv-email" name="rez_email" placeholder="Your Email" required="required">
								</div>
								<div class="form-group"> <!-- Guests field !-->
									<input type="number" class="form-control" id="rv-guests" name="rez_kisi" min="1" placeholder="Guests" required="required">
								</div>
								<div class="form-group"> <!-- Date field !-->
									<div class="input-group date" id="dp-date">
			                <input type="text" id="rv-date" class="form-control" placeholder="Date" name="rez_tarih" required="required">
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar">
			                    </span>
			                </span>
			            </div>
								</div>
								<div class="form-group"> <!-- Time field !-->
									<div class="input-group date" id="dp-time">
                    <input type="text" id="rv-time" class="form-control" name="rez_zaman" placeholder="Time" required="required">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
	                  </span>
	                </div>

								</div>
								 

								 <div class="center-button edit-marginTop30"> <!-- Submit button !-->

									<button type="submit" name="rezervasyonekle" id="rv-submit" class="btn btn-primary">Rezervasyon Yap</button>
								</div>
							</form>
							<?php 

              if ($_GET['durum']=="ok") {?>

              <?php echo '<script type = "text/javascript"> swal("Reservasyon Başarılı", "Reservasyon Kaydınız Yapılmıştır", "success");</script>'; ?>


              <?php } elseif ($_GET['durum']=="no") {?>

            <?php echo '<script type = "text/javascript"> swal("HATA", "Reservasyon Başarısız", "error");</script>'; ?>

              <?php }

              ?>

								<div id="rv-message"></div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12" >
						<div class="time-clock-box">
						
							<ul id="clock">
							  <li id="sec"></li>
							  <li id="hour"></li>
							  <li id="min"></li>
							</ul>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
	</section>

	<!-- END RESERVATION NOW  -->

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
	<!-- END RESERVATION CALL -->

	<!-- CHEF TEAM  -->
	
		<!-- END CHEF TEAM -->

		<!-- BEGIN TESTIMONIALS  -->
		
		<!-- END TESTIMONIALS  -->

		<!-- BEGIN CERTIFICATES  -->
		
		<!-- END TESTIMONIALS  -->

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
	<script type="text/javascript" src="js/contact-mail.js"></script>

	<script type="text/javascript">
		// Hero Slide// --------------------------
		jQuery(document).ready(
		    function() {
		        var slider = new XPRO.Controls.Slider(null);
		        slider.initSlider("scroller", {
		                "mode"              : "fade",
		                "dir"               : "left",
		                "iniWidth"          : 1200,
		                "iniHeight"         : 600,
		                "autoRun"           : true,
		                "interval"          : 6000,
		                "autoHeightMode"    : "maintainratio",
		                "thumbnails"        : null,
		                "stopOnHover"       : false,
		                "imageVAlign"       : "bottom",
		                "showProgress"      : false,
		                "enableNavigation"  : true,
		                "onAdjustHeight"    : function(theslider) {
		                    //get available height
		                    var aH = jQuery(window).innerHeight();
		                    var top = jQuery(theslider.rt["scroller"]).position()["top"];
		                    return aH-top;
		                }
		        });

		        jQuery(".xp-custom-navigation").on("click", function() {
		            slider.forward();
		            return false;
		        });
		    }
			);
	</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>
