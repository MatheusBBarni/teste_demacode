<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name');echo " | "; bloginfo('description'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?> ">

	<?php wp_head(); ?>

	

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">




</head>
<body>


	<div class="header">
		<div class="wrap-center">
			<h1><a href="<?php echo site_url('home'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/letreiro.png"></a></h1>

			<div class="info">

				<?php 
					$args = array('post_type' => 'page','pagename' => 'cabecalho' );
					$my_page = get_posts($args);
				 ?>

				 <?php if($my_page) : foreach($my_page as $post) : setup_postdata($post); ?>

				 	
				 	<?php the_excerpt(); ?>	

				 	<a href="<?php the_permalink(); ?>" class="custom-button">Contato</a>
				 <?php endforeach; ?>

				 <?php else: ?>
				 	<p>Nenhum conteudo inserido na pagina</p>
				 <?php endif; ?>
			</div>
		</div>
	</div>

		<div class="header-pg">
			<?php wp_nav_menu(
				array('theme_location' => 'header-menu')
			); ?>

			<!-- <div class="nav-link">
				<ul>
					<li>
						<a href="page-home.php">Home</a>
					</li>
					<li>
						<a href="page-quemsomos.php">Quem Somos</a>
					</li>
				</ul>
			</div> -->
		</div>