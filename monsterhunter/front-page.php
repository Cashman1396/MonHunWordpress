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

<style>
		#hero {
			background-image: url(<?php echo $hero; ?>);
		}
</style>

<?php endif; ?>



    
</div>



</div>



<div class="cta-null">
<div class="cta-text">
    <h2>Lorem ipsum dolor</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur</h3>

    <button type="button" class="btn btn-primary">Tweet</button>

    <button type="button" class="btn btn-primary post facebook"> <svg xmlns="http://www.w3.org/2000/svg" width="39.374" height="84.737" viewBox="0 0 39.374 84.737">
  <path id="Facebook" d="M57.356,33.534H43.947V24.739c0-3.3,2.189-4.073,3.731-4.073H57.14V6.147L44.108,6.1c-14.467,0-17.759,10.829-17.759,17.759v9.679H17.982V48.5h8.367V90.833h17.6V48.5H55.821Z" transform="translate(-17.982 -6.096)" fill="#fff"/>
</svg>
Post</button>

    <button type="button" class="btn btn-danger">Danger</button>

</div>
</div>


<?php 

$images = get_field('image_gallery');
if( $images ):
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

  <div class="responsive">
    <?php foreach($images as $image_ID): ?>
      <div class="image-slide">
        <?= wp_get_attachment_image($image_ID, "thumbnail") ?>
      </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

    



</div>


<div class="faq-area">

<?php if( have_rows('faq-repeater') ): 
  $faq_count = 0; ?>
  
<div class="faq-text">
    <h1>FAQ</h1>



<div class="accordion" id="accordionExample">
<?php while( have_rows('faq-repeater') ): the_row(); 
 $faq_count++;
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?php echo $faq_count ?>">
      <button class="accordion-button <?php if ($faq_count!=1) { echo'collapsed'; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_count ?>" aria-expanded="<?php if ($faq_count==1) {echo 'true';} else {echo 'false';} ?>" aria-controls="collapse<?php echo $faq_count ?>">
        QUESTION: <?php echo $question ?>
      </button>
    </h2>
    <div id="collapse<?php echo $faq_count ?>" class="accordion-collapse collapse <?php if ($faq_count==1) { echo 'show'; } ?>" aria-labelledby="heading<?php echo $faq_count ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        ANSWER: <?php echo $answer ?>
      </div>
    </div>
  </div>

  <?php endwhile ?>

<div class="hashtag">
  <h2>#WORLDTORISE</h2>
</div>



</div>
<?php endif ?>



</div>




<?php 

get_footer();
?>