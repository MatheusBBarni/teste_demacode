

<?php get_header();  ?>

	<div class="quem">

				<?php 
					$args = array('post_type' => 'page','pagename' => 'quem-somos' );
					$my_page = get_posts($args);
				 ?>

				 <?php if($my_page) : foreach($my_page as $post) : setup_postdata($post); ?>

				 	<h2><?php the_title(); ?></h2>
				 	<?php the_content(); ?>	

				 <?php endforeach; ?>

				 <?php else: ?>
				 	<p>Nenhum conteudo inserido na pagina</p>
				 <?php endif; ?>
			</div>


<?php get_footer(); ?>