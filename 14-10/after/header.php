<?php
global $beeseo_options;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if(isset($beeseo_options['theme_loader']) && $beeseo_options['theme_loader']=='1')
{ ?>
<div class="preloader">
    <div class="dots-loader"><?php esc_html_e("Loading ...","beeseo") ?></div>
</div>
<?php } ?>
<?php
global $post;
$post_ID = $boxed = null;
$boxed           = $beeseo_options['boxed'];
if(class_exists( 'WooCommerce' ) && is_shop())
{
	$post_ID = get_option( 'woocommerce_shop_page_id' ); 
} else if(empty($post_ID)){
	global $wp_query; 
	$post_obj = $wp_query->get_queried_object();
	if(!empty($post_obj))
		$post_ID  = $post_obj->ID; 
}

$header_style = '1';
$headerCSS = "header1";
$header_style = isset($beeseo_options['default_header_layout'])?$beeseo_options['default_header_layout'] : '1';
$page_header_style = get_post_meta($post_ID, 'header_style', true);
$header_style = $page_header_style ? $page_header_style : $header_style;
if(isset($header_style) && $header_style=='2')
{
    $headerCSS = "header2";
} else if(isset($header_style) && ($header_style=='3' || $header_style=='4') )
{
	 $headerCSS = "";
}

?>
<?php
	$logo = get_template_directory_uri() . '/images/logo.png';
	if(isset($header_style) && ($header_style=='1' || $header_style=='2') )
	{
		if (isset($beeseo_options['logo_for_header']['url']) && $beeseo_options['logo_for_header']['url']) {
			$logo = $beeseo_options['logo_for_header']['url'];
		}
	}
	if(isset($header_style) && ($header_style=='3' || $header_style=='4') )
	{
		if (isset($beeseo_options['white_logo_for_header']['url']) && $beeseo_options['white_logo_for_header']['url']) {
			$logo = $beeseo_options['white_logo_for_header']['url'];
		}
	}
?>
<?php 
if ( $boxed == '2' ) : ?>
	<div class="sd-boxed">
<?php endif; ?>
<header class="row header<?php echo esc_html($header_style); ?>">
	<?php if(isset($header_style) && $header_style=='2')
		{ ?>
			<div class="container">
				<div class="row top-text-bar">
					<?php if(isset($beeseo_options['topbar_slogan_text']) && $beeseo_options['topbar_slogan_text']) : ?>
					<div class="top-welcome-texts">
						<?php echo wp_kses($beeseo_options['topbar_slogan_text'],array('a' => array('href' => array(),'title' => array()),'i' => array('class' => array()),'br' => array(),'em' => array(),'strong' => array())); ?>
					</div>
					<?php endif; ?>
					
					<?php if(isset($beeseo_options['free_consultation_button_text']) && $beeseo_options['free_consultation_button_text']) : ?>
					<a href="<?php echo esc_attr($beeseo_options['free_consultation_button_url']); ?>" class="fconsult-btn">
							<?php echo esc_html($beeseo_options['free_consultation_button_text']); ?>			
					</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="row m0 navigation-bar">
				<div class="container">			
					<div class="row navigation m0">
						<div class="logo-part"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt=""></a></div>
						<div class="navigation-part">
						<div class="row top-bar m0">
							
			<?php } else if(isset($header_style) && $header_style=='1')
			{ ?> 
					<div class="container">
					<div class="row top-bar">
					
			<?php } else if(isset($header_style) && $header_style=='3')
			{ ?> 
					<div class="row m0 top-header">
						<div class="container">
							<div class="row">
			<?php }  else if(isset($header_style) && $header_style=='4')
			{ ?> 
					<div class="row top-header4 m0">
						<div class="container">
							<div class="row">
							<?php if(isset($header_style) && $header_style=='4' )
							{ ?>
								<div class="col-md-3 index2-logo">
								<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo esc_url( $logo ); ?>" alt=""></a>
								</div>
							<?php } ?>
									
								
			<?php } ?>
			
			
			
			<?php if(isset($beeseo_options['topbar_show_hide']) && $beeseo_options['topbar_show_hide']=='1')
			{ ?>
			
				<?php if(isset($beeseo_options['topbar_slogan_text']) && $beeseo_options['topbar_slogan_text'] && (/*$header_style=='1' ||*/ $header_style=='3')) : ?>
					<div class="col-sm-4 top-welcome-texts">
						<?php echo wp_kses($beeseo_options['topbar_slogan_text'],array('a' => array('href' => array(),'title' => array()),'i' => array('class' => array()),'br' => array(),'em' => array(),'strong' => array())); ?>
					</div>
				<?php endif; ?>
		
				<?php 
				/*Remove && $header_style!='1' from live*/
			/*	if(isset($beeseo_options['free_consultation_button_text']) && $beeseo_options['free_consultation_button_text'] && $header_style!='2' && $header_style!='1') : ?>
					<a href="<?php echo esc_attr($beeseo_options['free_consultation_button_url']); ?>" class="btn btn-primary fconsult">
							<?php echo esc_html($beeseo_options['free_consultation_button_text']); ?>			
					</a>
				<?php endif; */?>
			

                                
                                <ul class="loging-class pull-right">
                                    <li class="login1"><a href="#">Login</a>
                                   <ul class="sub-menu">
                                       <li><a href="#">outbound calender</a></li>
                                       <li><a href="#">inbound portal</a></li>
                                   </ul>
                                    </li>
                                </ul>
                                
                                
                                
				<?php if(isset($beeseo_options['topbar_search']) && $beeseo_options['topbar_search']=='1')
					{ 
						get_template_part( 'partial/search' ); 
					} 
					$contactAlign = $beeseo_options['topbar_contact_information'];
					if($contactAlign == "1")
						$contactClass = "leftflot";
					else if($contactAlign == "3")
						$contactClass = "rightflot";
					
					$socialAlign = $beeseo_options['topbar_social_icon'];
					if($socialAlign == "1")
						$socialClass = "leftflot";
					else if($socialAlign == "3")
						$socialClass = "rightflot";
					else
						$socialClass = "";	
					?>
			
				<ul class="top-contact-infos nav nav-pills <?php echo esc_html( $contactClass ); ?>" >
				 <?php if(isset($beeseo_options['topbar_email']) && $beeseo_options['topbar_email']) : ?>
					<li><a href="mailto:<?php echo esc_attr($beeseo_options['topbar_email']); ?>"><i class="fa fa-envelope"></i><?php echo esc_html($beeseo_options['topbar_email']); ?></a></li>
				<?php endif; ?>
				<?php if(isset($beeseo_options['topbar_email']) && $beeseo_options['topbar_email']) : ?>
					<li><a href="tel:<?php echo esc_attr($beeseo_options['topbar_phone']) ?>"><i class="fa fa-phone-square"></i><?php echo esc_html($beeseo_options['topbar_phone']); ?></a></li>
				<?php endif; ?>
				<?php if(isset($beeseo_options['topbar_custom_text']) && $beeseo_options['topbar_custom_text']) : ?>
					<li>
						<?php echo wp_kses($beeseo_options['topbar_custom_text'],array('a' => array('href' => array(),'title' => array()),'i' => array('class' => array()),'br' => array(),'em' => array(),'strong' => array())); ?>
					
					</li>
				<?php endif; ?>
				</ul>
				<?php if(isset($beeseo_options['topbar_search']) && $beeseo_options['topbar_search']=='3' && $header_style!='4'){ ?>
				<div class="<?php echo esc_html( $socialClass ); ?>" >
					<?php get_template_part( 'partial/search' ); ?>
				</div>
				<?php } ?>
				<?php if(isset($beeseo_options['topbar_social_icon']) && $beeseo_options['topbar_social_icon'] != '2' && $header_style!='4') { ?>
				<div class="<?php echo esc_html( $socialClass ); ?>" >
					<?php get_template_part( 'partial/social' ); ?>
				</div>
				<?php } ?>
			
			
			<?php } ?>
			<?php $headerCustomCss = "";
				  
				if($beeseo_options["header_padding_top"])
				{
					$headerCustomCss .= 'padding-top:'.esc_attr($beeseo_options["header_padding_top"]).'px;';
				}
				if($beeseo_options["header_padding_bottom"])
				{
					$headerCustomCss .= 'padding-bottom:'.esc_attr($beeseo_options["header_padding_bottom"]).'px;';
				}
				if($beeseo_options["header_min_height"])
				{
					$headerCustomCss .= 'min-height:'.esc_attr($beeseo_options["header_min_height"]).'px;';
				}
				?>
			
			<?php if(isset($header_style) && $header_style=='3') { ?> 
			</div>
			</div>
			</div>
	<?php } else if(isset($header_style) && $header_style=='2') { ?> 
			</div>
	<?php } else if(isset($header_style) && $header_style=='1') { ?> 
			</div>
			</div>
	<?php } else if(isset($header_style) && $header_style=='4') { ?> 
			</div>
			</div>
			</div>
	<?php } ?>
			<nav class="navbar-default navbar-static-top navbar navbar<?php echo esc_html($header_style); ?>" style="<?php echo esc_attr($headerCustomCss); ?>">
				<?php if(isset($header_style) && $header_style!='2') { ?> 
				<div class="container">
				<?php } ?>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
						<span class="sr-only"><?php esc_html_e("Toggle navigation","beeseo") ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php if(isset($header_style) && ($header_style=='1' || $header_style=='3'))
					{ ?>
					
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt=""></a>
					<?php } ?>
				</div>
				
				
				<div class="collapse navbar-collapse" id="main-nav" >
					  <?php
						wp_nav_menu( array(
						'theme_location'  => 'top-navigation',
						'menu_class'   => 'nav navbar-nav navbar-right',
						'menu_id'   => '',
						'fallback_cb' => true,
						'depth' => 3,
						'walker'    => new wp_bootstrap_navwalker()
						)
						);
						?>
						<?php if(isset($header_style) && $header_style=='4')
							{ ?>
							<div class="<?php echo esc_html( $socialClass ); ?>" >
								<?php get_template_part( 'partial/social' ); ?>
							</div>
						<?php } ?>
						
				</div>
				<?php if(isset($header_style) && $header_style!='2') { ?> 
				</div>
				<?php } ?>
			</nav>
		<?php if(isset($header_style) && $header_style=='2')
		{ ?>
		</div>   
		</div>
		</div>
		</div>
	
		<?php } ?>
	
</header>
<?php
	if ( ! is_singular( array( 'download') ) ) {
		get_template_part( 'partial/page-top' );
	}
?>