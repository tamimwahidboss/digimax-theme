<?php $options = get_option( 'digimax_options' ); ?>

<!--====== Map Area Start ======-->
<section class="section map-area">
    <iframe src="<?php echo $options['map_iframe']; ?>" width="100" height="100" style="border:0;" allowfullscreen=""></iframe>
</section>
<!--====== Map Area End ======-->