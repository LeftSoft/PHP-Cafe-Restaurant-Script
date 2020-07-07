<?php

 require_once('header.php');
 ?>
		<!-- END HEADER -->


		<!-- BEGIN HEADER BACKGROUND -->
		<div class="header-background-box half">
			<div class="header-background" data-image-src="images/content/menu_header_background.jpg">
				<div class="webkit-and-moz-overlay-background">
					<div class="container">
						<div class="center-section">
							<h2 class="section-title-border whiteTitleBorder">Menü</h2>
							
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
				<a href="menu.php">Menü</a>
			</div>
		</div>
		<!-- END SITE MAP -->

		<!-- MENU OF THE DAY -->
		<section class="menu-list-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						
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

		<!-- BEGIN CERTIFICATES  -->
		
		<!-- END CERTIFICATES  -->

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

</body>

</html>
