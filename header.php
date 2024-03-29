<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body class="container-fluid">
<nav class="navbar navbar-expand-md bg-dark pb-m-4 pt-m-4 pl-m-0 pr-m-0 font-weight-bold text-uppercase bg-white">
    <a class="navbar-brand img-fluid" id="logo" href="#">
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
		echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
	<?php
	wp_nav_menu([
		'menu'            => 'primary',
		'container'       => 'div',
		'container_id'    => 'navbarCollapse',
		'container_class' => 'collapse navbar-collapse',
		'menu_id'         => false,
		'menu_class'      => 'navbar-nav ml-auto',
		'depth'           => 0,
		'fallback_cb'     => 'bs4navwalker::fallback',
		'walker'          => new bs4navwalker()
	]);
	?>
    <div class="row">
        <div class="col-12 col-md-6">
            <img class="d-block" id="user-icon" src="<?php echo get_template_directory_uri();?>/img/user.png">
        </div>
        <div class="col-md-6 pl-2">
            <img class="d-none d-lg-block" id="search-toggle" src="<?php echo get_template_directory_uri();?>/img/search.png" >
        </div>
    </div>
</nav>
