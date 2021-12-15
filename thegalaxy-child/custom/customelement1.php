<?php
	
	if( have_rows('services_blocks') ):

		echo '<div id="service_block_wrapper">';
		
		echo '<h2>Learn More About</h2><h1>Comprehensive Services</h1>';
				
		while ( have_rows('services_blocks') ) : the_row();
				        
			echo '<div class="services_block">';
			
			$link = get_sub_field('page_link');
			
			echo '<i class="' . get_sub_field('icon') . '"></i>';
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo '<p>' . get_sub_field('description') . '</p>';
			
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
		
		$count = count( get_field('services_blocks') );
		
		if ($count <= 6):
		
			echo '<div id="more_services_wrapper"><div class="more_services"><a href="#">View All Services</a></div></div>';
		
		endif;
					
	else :
				
	endif;
		
?>