<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <?php
    get_template_part('template-parts/global-elements/preloader');

    ?>

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->
    <?php $options = get_option( 'digimax_options' ); ?>

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand -->
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <img class="navbar-brand-regular" src="<?php echo $options['logo-white']['url']; ?>">
                        <img class="navbar-brand-sticky" src="<?php echo $options['sticky-logo']['url']; ?>">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                        <?php
                            $nav_social_link = $options['header-social'];
                            foreach($nav_social_link as $social) {
                                ?>
                                    <li class="nav-item social">
                                        <a href="<?php echo $social['header-social-link']['url']; ?>" class="nav-link"><i class="<?php echo $social['header-social-icon']; ?>"></i></a>
                                    </li>
                                <?php
                            }
                        ?>
                        
                    </ul>

                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="<?php echo $options['header-right-btn-link']['url']; ?>" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-paper-plane contact-icon mr-md-2"></i><?php echo $options['header-right-btn-text']; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->