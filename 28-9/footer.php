<?php global $beeseo_options; 
$body_boxed        = $beeseo_options['boxed'];
$footer_widgetized = $beeseo_options['footer_widgetized'];
?>

<!--Footer-->
<footer class="row footer1 <?php if ((!isset($footer_widgetized) || $footer_widgetized == '0')) echo 'padding-none'; ?>">
	<div class="container">
		<div class="row">
		<?php 
		if (isset($beeseo_options['white_logo_for_header']['url']) && $beeseo_options['white_logo_for_header']['url']) {
			$logo = $beeseo_options['white_logo_for_header']['url'];
		}
		if(isset($beeseo_options['footer_top']) && $beeseo_options['footer_top']=='1') : ?>
		<div class="col-sm-12 copyright-area">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="foot-logo"><img src="<?php echo esc_url( $logo ); ?>" alt=""></a>
			<div class="copyright-texts">
				<?php echo wp_kses($beeseo_options['footer_copyright_text'],array('a' => array('href' => array(),'title' => array()),'i' => array('class' => array()),'br' => array(),'em' => array(),'strong' => array())); ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="col-sm-12 footer-sidebar">
			<div class="row">
				<?php $footer_type = $beeseo_options['footer_layout'];
				switch($footer_type){
				case 1: ?>
				<div class="col-md-4"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<div class="col-md-4"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
				<div class="col-md-4"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div>
				<?php break;
				case 2: ?>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-4' ) ) dynamic_sidebar('footer-section-4'); ?></div>
				<?php break;
				case 3: ?>
				<div class="col-md-6"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div>
				<?php break;
				case 4: ?>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
				<div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div>
                <div class="col-md-3"><?php if( is_active_sidebar( 'footer-section-4' ) ) dynamic_sidebar('footer-section-4'); ?></div>
				<?php break;
				case 5: ?>
				<div class="col-md-6"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<div class="col-md-6"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
				<?php break;
				case 6: ?>
				<div class="col-md-12"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
				<?php break;
				 } ?>
			</div>
		</div>	
		</div>
	</div>
</footer>
<?php 
if ( $body_boxed == '2' ) : ?>
</div>
<!-- sd-boxed -->
<?php endif; ?>

<?php 
echo esc_html(isset($beeseo_options['space_before_body']) ? $beeseo_options['space_before_body'] : '');
wp_footer(); ?>
<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 210) {
        $(".sticky_header").addClass("fixed_header");
    } else {
        $(".sticky_header").removeClass("fixed_header");
    }
});
</script>
</body>
</html>