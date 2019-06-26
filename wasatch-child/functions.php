<?php
/*==========================================================================================
Add stylesheets/javascripts to enqueue
============================================================================================*/
function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
    wp_enqueue_script( 'child_scripts', get_theme_file_uri().'/assets/js/child-scripts.js', '', '1.0', true);
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', '' , '1.5', false);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
/*==========================================================================================
Splash page fetchs
============================================================================================*/
//[schoolinfo]
function schoolinfo_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/schoolInfo.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'schoolinfo', 'schoolinfo_func' );
/*
[counselingMenu]
function counselingMenu_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/counseling.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'counselingMenu', 'counselingMenu_func' );

[extraCurricularMenu]
function extraCurricularMenu_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/extracurricular.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'extraCurricularMenu', 'extraCurricularMenu_func' );
*/
//[policiesMenu]
function policiesMenu_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/policies.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'policiesMenu', 'policiesMenu_func' );

//[facultyMenu]
function facultyMenu_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/staff.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'facultyMenu', 'facultyMenu_func' );
//[titleiMenu]
/*(function titleiMenu_func( $atts ) {
	$content = file_get_contents(get_theme_file_uri() . '/mega-menu-dropdowns/titlei.php');
	$divStripped = preg_replace("/<\/?div[^>]*\>/i", "", $content);
	$result = str_ireplace(array('<h3>','</h3>'),array('<h2>','</h2>'),$divStripped);

	echo $result;
}
add_shortcode( 'titleiMenu', 'titleiMenu_func' );
*/
/*==========================================================================================
Custom Excerpt
============================================================================================*/
function get_excerpt(){
	$excerpt = get_the_content();
	//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 200);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = '<p>'.$excerpt.'...'.'</p>';

	return $excerpt;
}
/*==========================================================================================
// custom Login Page
============================================================================================*/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Elem School | Provo City School District';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/*==========================================================================================
// Auto include link icons
============================================================================================*/
function extinlineLinkClass($extlink) {
   // global $post;
    	if('<a href') {
	    	return str_replace('<a href', '<a class="ext" href', $extlink);
    	} 
}
function intinlineLinkClass($intlink) {
    //global $post;
    	if('<a class="ext" href="https://sandbox2.provo.edu') {
	    	return str_replace('<a class="ext" href="https://sandbox2.provo.edu', '<a class="int" href="https://sandbox2.provo.edu"', $intlink);
    	} 
}
function pdfinlineLinkClass($pdflink) {
    	if('.pdf">') {
	    	return str_replace('.pdf">', '.pdf" class="pdf">', $pdflink);
    	} 
}
function pdflistLinkClass($pdflistlink) {
    	if('<li><a') {
	    	return str_replace('<li><a', '<li class="pdf"><a href', $pdflistlink);
    	} 
}
function extlistLinkClass($extlistlink) {
    	if('<li class="pdf"><a class="ext') {
	    	return str_replace('<li class="pdf"><a class="ext', '<li class="ext"><a ', $extlistlink);
    	} 
}
function intlistLinkClass($intlistlink) {
    	if('<li class="pdf"><a class="int" href="https://sandbox2.provo.edu') {
	    	return str_replace('<li class="pdf"><a class="int" href="https://sandbox2.provo.edu', '<li class="int"><a href="https://sandbox2.provo.edu', $intlistlink);
    	} 
}
//add_filter('the_content', 'extinlineLinkClass');
//add_filter('the_content', 'intinlineLinkClass');
//add_filter('the_content', 'pdfinlineLinkClass');
//add_filter('the_content', 'pdflistLinkClass');
//add_filter('the_content', 'extlistLinkClass');
//add_filter('the_content', 'intlistLinkClass');
/*==========================================================================================
// ShortCodes
============================================================================================*/
/*-------------------------------------------------------*/
/* [wpb_childpages]
/*-------------------------------------------------------*/

function wpb_list_child_pages() { 
global $post; 
	if ( is_page() && $post->post_parent )
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
		if ( $childpages ) {
			$string = '<ul>' . $childpages . '</ul>';
		}
	return $string;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');