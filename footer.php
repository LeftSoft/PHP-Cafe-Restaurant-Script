<footer id="footer" class="footer-background">
			<div id="footer-top" class="container">
				<div class="row">
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h3>
							<div id="footer-about">
							<p>
								<?php echo $hakkimizdacek['hakkimizda_icerik']; ?>
							</p>
								<ul class="socials-box footer-socials pull-left">
									<li><a href="#"><div class="social-circle-border"><i class="fa  fa-facebook"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
									<li><a href="#"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
								</ul>
							</div>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">İletişim</h3>
							<ul id="footer-contacts">
								<li><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a></li>
								<li><i class="fa fa-map-marker"></i><?php echo $ayarcek['ayar_adres']; ?></li>
								<li><i class="fa fa-phone"></i><?php echo $ayarcek['ayar_tel']; ?><br><?php echo $ayarcek['ayar_gsm']; ?></li>
							</ul>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Çalışma Saatleri</h3>
							<ul id="footer-work-time">
								<li>
									<span class="date">Monday - Friday</span><span class="time">8AM-2PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
								<li>
									<span class="date">Saturday</span><span class="time">10AM-5PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
								<li>
									<span class="date">Sunday</span><span class="time">12AM-5PM</span>
									<div class="line-box"><div class="line-dotted"></div></div>
								</li>
							</ul>
						</div>
						<div class="block col-sm-3">
							<h3 class="footer-title text-uppercase">Son Gönderi</h3>
							<ul id="footer-recent-post">
								<li>
									
										
										<div class="info">
										
											<span class="title">Yok</span>
										</div>
									
								</li>
								
							</ul>
						</div>
				</div>
			</div>

			<!--BEGIN COPYRIGHT -->
			<div id="copyright">
				<a href="#" class="scrollTopButton">
           <span class="button-square">
               <i class="fa fa-angle-double-up"></i>
           </span>
        </a>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="allright"><?php echo $ayarcek['ayar_footer']; ?></span>
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
		</footer>