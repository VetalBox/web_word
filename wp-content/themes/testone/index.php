	<?php 
	
	/*
	Template Name: Главная
	*/
	
	get_header(); 
	
	?>
	
	<div id="block-first">

		<h1><span><?php the_field('title');?></span></br><?php the_field('title_dop');?></h1>
				
	</div>

	<div class="context">

		<div class="view_frame">

			<div class="rectangle_12">
				
				<a class="ellipse11"><img src="<?php bloginfo('template_url');?>/assets/images/Ellipse11.png" alt="Ellipse11"/></a>
				<a><img src="<?php bloginfo('template_url');?>/assets/images/Rectangle12.png" alt="Rectangle12"/></a>
				
			</div>

			<div class="view_frame_block">

				<p><?php the_field('descript');?></p>
					<br>
					<button class="quote"><a href="/templates/contact.php" >Get a quote</a></button>
			</div>

		</div>

		<div class="label_img">
			<div>
				<a><img src="<?php the_field('technologi1');?>" alt="labe2"/></a>
				<a><img src="<?php the_field('technologi2');?>" alt="labe3"/></a>
				<a><img src="<?php the_field('technologi3');?>" alt="labe4"/></a>
			</div>

			<hr class="line_gor1">

			<div class="label_img">

				<a><img src="<?php the_field('technologi4');?>" alt="labe5"/></a>
				<a><img src="<?php the_field('technologi5');?>" alt="labe1"/></a>
				<a><img src="<?php the_field('technologi6');?>" alt="labe6"/></a>
			</div>

			<hr class="line_gor2">

		</div>

	</div>

	<br>

	<hr class="line_gor3">

	<br>

	<div class="string">
		<span>
			<img src="<?php the_field('comp1');?>" alt="labe11"/>
			<img src="<?php the_field('comp2');?>" alt="labe12"/>
			<img src="<?php the_field('comp3');?>" alt="labe13"/>
			<img src="<?php the_field('comp4');?>" alt="labe14"/>
			<img src="<?php the_field('comp5');?>" alt="labe15"/>
			<img src="<?php the_field('comp6');?>" alt="labe16"/>
		</span>
	</div>

	

<?php get_footer(); ?>