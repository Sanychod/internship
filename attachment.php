<?php
/*
* Template for displaying attachments
*/
get_header(); ?>
</header>
<section id="About" class="main">
        <div class="container">

 
<p class='post-single'> Downloads: 
<?php
    $images = array();
    $image_sizes = get_intermediate_image_sizes();
    array_unshift( $image_sizes, 'full' );
    foreach( $image_sizes as $image_size ) {
        $image = wp_get_attachment_image_src( get_the_ID(), $image_size );
        $name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
        $images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
    }
    echo implode( ' | ', $images );
?>
</p>
			</div>
	</section>

<?php

