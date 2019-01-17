<footer id="mainFooter">
			<section id="teacherAccess">
				<h1 class="teacherActivate"><a href="<?php echo get_home_url(); ?>/teacher-access/">Teacher Access</a></h1>

				<ul class="imagelist">
				 	<li><a href="<?php echo get_home_url(); ?>/wp-login.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/web-page-login.svg" alt="" />Teacher Web Page Login</a></li>
				 	
				 	<li><a href="https://helpdesk.provo.edu:8443/helpdesk/WebObjects/Helpdesk.woa"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/work-order.svg" alt="" />Open a work order</a></li>
				 	<li><a href="http://mail.provo.edu/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/email.svg" alt="" />Email Access</a></li>
				 	<li><a href="<?php echo get_home_url(); ?>/how-to-schedule-a-substitute/"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-a-substitute.svg" alt="" />How to Schedule a Substitute</a></li>
				 	<li><a href="https://grades.provo.edu/teachers/pw.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />PowerTeacher Login</a></li>
				 	<li class="employeelink"><a href="https://employee.provo.edu/"><img src="<?php echo get_template_directory_uri() .'/assets/icons/pcsd-logo-website-header-branding.png' ?>" alt="" />Employee Support Website</a></li>
				 	
				</ul>
			</section>
			<p>The Provo City School District supports equal opportunity for students, staff, parents and guests and complies with state and federal law regulation including Title VII of the Civil Rights Act and Title IX of the Education Amendments.  The District does not discriminate in programs services, activities or employment on the basis of religion, sex, sexual orientation, race, color, national origin, age, veteran or military status, or disability. Inquiries regarding students, programs, services or activity compliance may be directed to the Executive Director of Student Services at 280 West 940 North, Provo, UT 84604 801-374-4814. For program, service or activity accommodations under the ADA, please contact Student Services at 801-374-4838 or donnan@provo.edu. Inquiries regarding employment compliance may be directed to the Executive Director of Human Resources at 280 West 940 North, Provo, UT 84604 801-374-4938. For applicant or employee accommodations under the ADA, please contact the Benefit Coordinator 801-374-4847 or rebeccavo@provo.edu.</p>
			<p class="feedback"><a href="<?php echo get_home_url(); ?>/website-feedback/">Help us improve our website. Submit your comments and suggestions through our Website Feedback Form.</a></p>
		</footer>
		<?php wp_footer(); ?>
		<script type="text/javascript" src="//customer.cludo.com/scripts/bundles/search-script.min.js"></script>
		<script>
		var CludoSearch;
		(function () {
		    var cludoSettings = {
		        customerId: 10000352,
		        engineId: 10000520,
		        searchUrl: 'https://wasatch.provo.edu/search-results/',
		        language: 'en',
		        searchInputs: ['cludo-search-form'],
		        template: 'StandardInlineImages',
		        type: 'inline',
		        initFacets: { "Category": ["Wasatch Elementary"] }     
		    };
		CludoSearch= new Cludo(cludoSettings);
		CludoSearch.init();
		})();
		</script>
		<!--[if lte IE 9]>
		<script src="https://api.cludo.com/scripts/xdomain.js" slave="https://api.cludo.com/proxy.html" type="text/javascript"></script>
		<![endif]-->
</body>
</html>