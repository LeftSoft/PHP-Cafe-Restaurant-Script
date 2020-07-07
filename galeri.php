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
							<h2 class="section-title-border whiteTitleBorder">Galeri</h2>
							
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
				<a href="galeri.php">Galeri</a>
			</div>
		</div>
		<!-- END SITE MAP -->

		<!-- BEGIN GALLERY  -->
		<section class="gallery-content">
				<div class="container">
					
					
					<div id="gallery-box" class="row edit-paddingTop40">

							<?php 

		$galerisor=$db->prepare("SELECT * FROM galeri");
		$galerisor->execute();

		while($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {

		 ?>


						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="<?php echo $galericek['galeri_fotograf'] ?>" data-src="<?php echo $galericek['galeri_fotograf'] ?>" title="<?php echo $galericek['galeri_baslik'] ?>" alt="<?php echo $galericek['galeri_altbaslik'] ?>" />
							</div>
						</div>
						<?php } ?>
						<!--
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/2.jpg" data-src="images/gallery/2.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/3.jpg" data-src="images/gallery/3.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/4.jpg" data-src="images/gallery/4.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/5.jpg" data-src="images/gallery/5.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/6.jpg" data-src="images/gallery/6.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/7.jpg" data-src="images/gallery/7.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/8.jpg" data-src="images/gallery/8.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="xp-grid-thumb">
									<img class="gallery-slide-image" src="images/gallery/9.jpg" data-src="images/gallery/9.jpg" title="Nice Food Pasta" alt="Fried fish with sauce" />
							</div>
						</div>
						--->
					</div>
				</div>
		</section>
		<!-- END GALLERY  -->

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
        jQuery(document).ready(
            function() {
                var slider = new XPRO.Controls.Slider();
                slider.createSliderStruct({
                    elements: jQuery('#gallery-box .gallery-slide-image').toArray(),
                    sliderOptions: {
                        "mode"              : "slide",
                        "iniWidth"          : 1000,
                        "iniHeight"         : 500,
                        "autoHeightMode"    : "maintainratio",
                        "thumbnails"        : null,
                        "floating"          : true,
                        "autoRun"           : true,
                        "interval"          : 6000,
                        "stopOnHover"       : false,
                        "showProgress"      : true,
                        "infoPanel"         : {panelId: "infopanel"},
                        "onSlide"           : function(cnt) {
                            //select thumbnail
                            jQuery("#gallery-box").find(".xp-grid-thumb").removeClass("xp-grid-thumb-sel");
                            var thm = cnt.elm.getAttribute("data-thumb-idx");
                            jQuery("#gallery-box").find("[data-thumb-idx='"+thm+"']").parent(".xp-grid-thumb").addClass("xp-grid-thumb-sel");
                        }
                    },
                    itemHTML: function(html, idx, elm) {

                        elm.setAttribute("data-thumb-idx", idx);
                        jQuery(elm).on("click", function() {
                            slider.showSlider();
                            slider.slideTo(idx);
                        });
                        html  = "<div class='xpro-slider-item' data-thumb-idx='"+idx+"'><div class='xpro-image-placeholder' data-src='" + elm.getAttribute("data-src") +"' data-class='xpro-kenburns-dir-random' ></div>";
                        html += "<div class='xpro-item-layer p-item-layer' data-effect=\"animate({zoom:'in', delay:'0.8s'})\" >"+elm.getAttribute('alt')+"</div>";
                        html += "<div class='xpro-slider-info'>"+elm.getAttribute('title')+"</div>";
                        html += "</div>";
                        return html;
                    },
                    beforeHTML: function() {return ""; /*not needed just show it as example*/ },
                    afterHTML: function() {return "<div id='infopanel' ></div>"}

                });
            }
        );

    </script>

</body>


</html>
