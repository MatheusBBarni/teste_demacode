
	

	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

	<script>
		$('.slider').slick({
			dots: true,
			infinite: true,
			slideToShow: 1,
			speed: 1000,
			autoplay: true,

		});
	</script>

<?php wp_footer(); ?>
	
	<style type="text/css">
		footer {
			background-color: orange;
			margin-bottom: 0;
		}

		.midias-sociais {
			margin-left: 10px;
			float: left;
		}

		.midias-sociais h3 {
			font-size: 15px;
			color: #f4f5f7;
 
		}

		.midias-sociais ul li {
			color: #f4f5f7;
			padding: 0;
		}

		.midias-sociais .insta li {
			list-style-image: url("<?php bloginfo('template_url'); ?>/assets/images/insta-demacode.png");
		}

		.midias-sociais .face li {
			list-style-image: url("<?php bloginfo('template_url'); ?>/assets/images/face-demacode.png");
		}

		.midias-sociais .wpp li {
			list-style-image: url("<?php bloginfo('template_url'); ?>/assets/images/wpp-demacode.png");
		}

		.endereco {
			float: right;
			margin-left: 50px;
		}

		.endereco span {
			display: flex;
			color: #f4f5f7;
		}

		.endereco h3  {
			color: #f4f5f7;
		}

		.rodape1 {
			float: left;
			background-color: orange;
			width: 1901px;
		}

		.rodape2 {
			float: right;
			background-color: orange;
		}



	</style>
	
	<footer>
		<div class="rodape1">
				<div class="midias-sociais">
					<h3>Nossas Midias Sociais</h3>
					<ul class="insta">
						<li>
							<span><a href="https://www.instagram.com/demacodedigital/" target="_blank">Instagram</a></span>
						</li>
					</ul>
						<ul class="face">
						<li>
							<span><a href="https://www.facebook.com/demacode/" target="_blank">Facebook</a></span>
						</li>
					</ul>
						<ul class="wpp">
						<li>
							<span><a href="https://api.whatsapp.com/send?phone=5547992710951" target="_blank">Whatsapp</a></span>
						</li>
					</ul>
				</div>

				<div class="endereco">
					<h3>Nosso Endereço</h3>
					<span>Av. Cônsul Carlos Renaux, 56 - Sala 802 - Centro, Brusque - SC</span>
				</div>
		</div>


	</footer>

</body>
</html>