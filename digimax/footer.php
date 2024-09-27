        <?php
        $options = get_option( 'digimax_options' );
        $hmSel = $options['home_page_selector'];
        ?>

        <!--====== Footer Area Start ======-->
        <footer class="section footer-area  <?php if( $hmSel == 'home_page_5' ) {echo 'dark-bg';} ?>">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                     <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-2' ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-3' ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-4' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left"><?php echo $options['ft-cpr']; ?></div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i> By <a href="https://wordpress10ms.com/">WordPress10MS</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form role="search" method="get" class="row" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mb-3"><?php echo $options['search_h2']; ?></h2>
                                        <p><?php echo $options['search_p']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group">
                                        <input type="search" class="form-control" placeholder="Enter your keywords" value="<?php echo get_search_query(); ?>" name="s" title="Search">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button type="submit" class="btn btn-bordered mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->

    </div>
	<?php wp_footer(); ?>
</body>
</html>