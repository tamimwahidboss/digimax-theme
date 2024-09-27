<?php

/**
 * Register widget area.
 */
function digimax_widgets_init() {
	register_sidebar(
		array(
			'id'            => 'sidebar-1',
			'name'          => esc_html__( 'Sidebar', 'digimax' ),
			'description'   => esc_html__( 'Add widgets here.', 'digimax' ),
			'before_widget' => '<div class="single-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="text-uppercase d-block py-3">',
			'after_title'   => '</h5>',
		)
	);
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'digimax' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here.', 'digimax' ),
        'class'         => 'custom-sidebar-class',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-items">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title text-uppercase mb-2">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'digimax' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here.', 'digimax' ),
        'class'         => 'custom-sidebar-class',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-items">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title text-uppercase mb-2">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'digimax' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here.', 'digimax' ),
        'class'         => 'custom-sidebar-class',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-items">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title text-uppercase mb-2">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 4', 'digimax' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here.', 'digimax' ),
        'class'         => 'custom-sidebar-class',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-items">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title text-uppercase mb-2">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'digimax_widgets_init' );

/**
 * Popular Post Custom Widgets
 */

 class digimax_popula_post extends WP_Widget{
    public function __construct() {
        parent:: __construct(
            'digimax_popula_post',
            __('Digimax Popular Post', 'digimax'),
        );
        add_action('widgets_init', function() {
            register_widget('digimax_popula_post');
        });
    }
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if(!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $instance['count'],
            'order' => $instance['dg_order'],
        );
        $query = new WP_Query($query_args);
        if ($query->have_posts()) {
            echo '<div class="widget post-widget">';
            echo '<div class="widget-content">';
            echo '<ul class="widget-items">';
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="single-post media py-3">
                            <!-- Post Thumb -->
                            <div class="post-thumb avatar-lg h-100">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post-content media-body ml-3 py-2">
                                <p class="post-date mb-2"><?php the_date(); ?></p>
                                <h6><?php the_title(); ?></h6>
                            </div>
                        </a>
                    </li>
                <?php
            }
            echo '</ul>';
            echo '</div>';
            echo '</div>';

            echo $args['after_widget'];
        }
    }
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $count = !empty($instance['count']) ? $instance['count'] : '';
        $dg_order = !empty($instance['dg_order']) ? $instance['dg_order'] : '';
        ?>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __('Heading'); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" class="widefat">
            
            <label for="<?php echo $this->get_field_id('count'); ?>"><?php echo __('Post count:'); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $count; ?>">
        
            <label for="<?php echo $this->get_field_id('dg_order'); ?>"><?php echo __('Post order:'); ?></label>
            <select type="text" name="<?php echo $this->get_field_name('dg_order'); ?>" id="<?php echo $this->get_field_id('dg_order'); ?>">
                <option value="DESC" <?php selected($dg_order, 'DESC'); ?>>DESC</option>
                <option value="ASC" <?php selected($dg_order, 'ASC'); ?>>ASC</option>
            </select>
        <?php
    }
 }
 $my_widget = new digimax_popula_post();

 /**
 * Search Custom Widgets
 */

 class digimax_search extends WP_Widget{
    public function __construct() {
        parent:: __construct(
            'digimax_search',
            __('Digimax Search')
        );
        add_action('widgets_init', function() {
            register_widget('digimax_search');
        });
    }
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if(!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        ?>
        <div class="widget-content search-widget">
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="text" placeholder="Enter your keywords" value="<?php echo get_search_query(); ?>" name="s">
            </form>
        </div>
        <?php
        echo $args['after_widget'];
    }
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php __('Title:', 'digimax'); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
        </p>
        <?php
    }
 }
 $my_widget = new digimax_search();

  /**
 * Category Custom Widgets
 */

 class digimax_cat extends WP_Widget{
    public function __construct() {
        parent:: __construct(
            'digimax_cat',
            __('Digimax Categories')
        );
        add_action('widgets_init', function() {
            register_widget('digimax_cat');
        });
    }
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if(!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        ?>
        <div class="widget catagory-widget">
            <!-- Category Widget Content -->
            <div class="widget-content">
                <!-- Category Widget Items -->
                <ul class="widget-items">
                    <li><a href="#" class="d-flex py-3"><span>Web Design</span><span class="ml-auto">(14)</span></a></li>
                    <li><a href="#" class="d-flex py-3"><span>Digital Agency</span><span class="ml-auto">(32)</span></a></li>
                    <li><a href="#" class="d-flex py-3"><span>Wordpress</span><span class="ml-auto">(27)</span></a></li>
                    <li><a href="#" class="d-flex py-3"><span>UI Design</span><span class="ml-auto">(18)</span></a></li>
                    <li><a href="#" class="d-flex py-3"><span>Marketing</span><span class="ml-auto">(15)</span></a></li>
                    <li><a href="#" class="d-flex py-3"><span>Web Template</span><span class="ml-auto">(29)</span></a></li>
                </ul>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php __('Title:', 'digimax'); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
        </p>
        <?php
    }
 }
 $my_widget = new digimax_cat();