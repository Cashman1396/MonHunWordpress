<?php 
 get_header();

 ?>

 <div id="hero">

<div class="hero-text">
 <h2><?php the_field('hero_headline'); ?></h2>
</div>

 <?php

 $hero = get_field('hero_image');

 if ( $hero ): ?>

<style type="text/css">
		hero {
			background-image: url(<?php echo $hero['wp-content/uploads/2021/06/Crimson-Glow-Valstrax-Hir-Res.png']; ?>);
		}
	</style>

<?php endif; ?>








    
</div>



</div>



<div class="cta-null">
<div class="cta-text">
    <h2>Lorem ipsum dolor</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur</h3>

</div>
</div>


<?php 

$images = get_field('image_gallery');


?>

<div class="slider-area">

    <div class="slider-text">
    <h2>Which Monster will you battle against</h2>
    </div>

    <div class="your-class">
        <div>First </div>
        <div>Second </div>
        <div>It works!</div>
        <div>WOW!</div>
    </div>

</div>


<div class="faq-area">
<div class="faq-text">
    <h1>FAQ</h1>

</div>

</div>








<?php 

get_footer();
?>