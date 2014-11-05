<?php get_header(); ?>

<div class="single aps">
	
	<div class="container">
			
		<?php while(have_posts()): the_post(); ?>
			
			<div class="item">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="category"><?php the_terms(get_the_ID(), 'categoria-da-evidencia'); ?></div>
				
				<div class="thumb">
					<?php foreach (get_the_terms(get_the_ID(), 'categoria-da-evidencia') as $cat): ?>
						<img src="<?php echo z_taxonomy_image_url($cat->term_id, 'single-thumb'); ?>" />
					<?php break; endforeach; ?>
				</div>
				
				<div class="dados">
					<p>
						<?php if(!empty(get_the_terms(get_the_ID(), 'teleconsultor'))): ?>
							<b>Teleconsultor: </b><?php the_terms(get_the_ID(), 'teleconsultor'); ?><br>
						<?php endif; ?>
						
						<?php if(!empty(get_the_terms(get_the_ID(), 'tipo-de-profissional'))): ?>
							<b>Profissional Solicitante: </b><?php the_terms(get_the_ID(), 'tipo-de-profissional'); ?><br>
						<?php endif; ?>
						
						<?php if(!empty(get_the_terms(get_the_ID(), 'ciap2'))): ?>
							<b>Descritores ICPC2: </b><?php the_terms(get_the_ID(), 'ciap2'); ?><br>
						<?php endif; ?>
						
						<?php if(!empty(get_the_terms(get_the_ID(), 'ciap1'))): ?>
							<b>Descritores CIAP1: </b><?php the_terms(get_the_ID(), 'ciap1'); ?><br>
						<?php endif; ?>
						
						<?php if(!empty(get_the_terms(get_the_ID(), 'decs'))): ?>
							<b>Descritores DeCS: </b><?php the_terms(get_the_ID(), 'decs'); ?><br>
						<?php endif; ?>
						
						<?php if(!empty(get_the_terms(get_the_ID(), 'categoria-da-evidencia'))): ?>
							<b>Categoria da Evidência: </b><?php the_terms(get_the_ID(), 'categoria-da-evidencia'); ?><br>
						<?php endif; ?>
					</p>
				</div>

				<div style="clear:both"></div>

				<div class="content">
					<p><?php the_content(); ?></p>
				</div>
				
				<b>Bibliografia Selecionada</b><br>
				<p><?php the_field('bibliografia_selecionada'); ?></p>

				<div class="clear"></div>
			</div>

		<?php endwhile; ?>
	
		<?php kriesi_pagination(); ?>
	</div>
	
</div>

<?php get_footer(); ?>