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

    <button type="button" class="btn btn-primary">Tweet</button>

    <button type="button" class="btn btn-primary post">Post</button>

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
      <div>
        <?= wp_get_attachment_image($image_ID, "thumbnail") ?>
      </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

    



</div>


<div class="faq-area">


<div class="faq-text">
    <h1>FAQ</h1>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        QUESTION: WHAT IS GOING ON
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        ANSWER: Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>


<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Accordion Item #4
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Accordion Item #5
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

<div class="hashtag">
  <h2>#WORLDTORISE</h2>
</div>



</div>



</div>




<?php 

get_footer();
?>