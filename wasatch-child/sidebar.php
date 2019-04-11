<aside id="mainSidebar">
				<?php
					$my_query = new WP_Query( array('showposts' => $posts_to_show, 'post_type'  => 'principals_message', 'posts_per_page' => 1));
				   			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				   				<article class="post">
							   		<a href="<?php the_permalink(); ?>">
								   		<header class="postmeta">
											<h1>Principal's Message</h1>
											<h2><?php the_title(); ?></h2>
										</header>
										<img src="<?php echo get_theme_file_uri(); ?>/assets/images/principal-message.jpg" alt="Admin photo" class="left" />
							   		</a>
							   		<?php the_excerpt(); ?>
							   		<p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
							   	</article>
							<?php endwhile;
					wp_reset_query();
				?>
			<section class="calendar-agenda">
				<h1>Today’s Events</h1>				
				<?php echo do_shortcode('[calendar id="172"]'); ?>
				<a href="<?php echo get_home_url(); ?>/all-events-calendar/">View All Events Calendar</a>
			</section>
			<section>
				<h1>Parent Resources</h1>
				<ul class="imagelist">
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>Grades & Attendance (PowerSchool)</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Classrooms</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/all-events-calendar/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/all-events-calendar.svg" alt="" />
							<span>All Events Calendar</span>
						</a>
					</li>
					<li>
						<a href="https://www.myschoolbucks.com/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pay-meals.svg" alt="" />
							<span>Pay For School Meals</span>
						</a>
					</li>
					<li>
						<a href="https://www.schoolnutritionandfitness.com/index.php?page=menus&sid=2302081511134871">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/meal-menu.svg" alt="" />
							<span>School Meal Menus</span>
						</a>
					</li>
					<li>
						<a href="https://www.schoollunchapp.com/Terms.aspx?host=provo.schoollunchapp.com&apply=1">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/apply-for-free-meals.svg" alt="" />
							<span>Apply for Free &amp; Reduced Meals</span>
						</a>
					</li>
					
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/volunteer-opportunities/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bus-routes.svg" alt="" />
							<span>Volunteer Opportunities</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/registration/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/apply-for-free-meals.svg" alt="" />
							<span>Registration</span>
						</a>
					</li>
				</ul>
				<a href="https://healthcare.utah.edu/uni/safe-ut/"><img src="https://wasatch.provo.edu/wp-content/uploads/2019/02/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
			</section>
		</aside>