<?php get_header();
/*
Template Name: Single Restaurant
*/

if( have_posts() ) : while( have_posts() ) : the_post();

$image = get_field('photo');?>

<div class="banner-container" <?php if( !empty( $image ) ):?>style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(the_field('photo')); ?>');"<?php endif;?>>

    <div class="banner-text banner-subtitle" style="color: #FFF;"><?= the_field('sur_titre'); ?></div>
    <div class="banner-text banner-title all-caps" style="color: #FFF;"><?= the_title(); ?></div>
    <div class="banner-text banner-link"><hr class="line"/><a href="#" class="proper-link">check our menu</a></div>

</div>

<div class="hachures-banner">
    <img class="bordure-hachure"src="https://raw.githubusercontent.com/becodeorg/LIE-Jepsen-3.20/master/02-the-hill/06-wordpress/project/assets/images/hachures-blanches.png?token=APOXPWZHSGUATKTHO4ABFBS7JYNH6" />
</div>

<img class="top_hach" src="wp-content/themes/quatroformaggi/img/hachures-blanches.png" alt="Hachures">

<div class="top_title_group">
  <div class="top_subtitle">
    <h3>Welcome</h3>
  </div>
  <div class="top_title">
    <h2>PRESENTATION</h2>
  </div>
</div>



  <article class="post">
    <?php if( get_field('photo') ): ?>
      <img class="top_image" src="<?php the_field('photo'); ?>" />
    <?php endif; ?>
    <div class="post_text">
      <h5><?php the_field('sur_titre'); ?></h5>
    	<h4><?php the_title(); ?></h4>
      <p><?php the_excerpt();?></p>
    </div>
    <img class="top_image" src="wp-content/themes/quatroformaggi/img/plate1.png" alt="Plate">
    <div class="post_text">
      <h5><?php the_field('sur_titre'); ?></h5>
      <h4><?php the_title(); ?></h4>
      <p><?php the_field('description'); ?></p>
    </div>
  </article>

<div class="middle_grey"></div>
<img class="middle_hachures" src="wp-content/themes/quatroformaggi/img/hachures-grises.png" alt="Hachures">

<div class="top_title_group">
  <div class="loc_subtitle">
    <h3>Find us</h3>
  </div>
  <div class="loc_title">
    <h2>LOCATION</h2>
  </div>
</div>

<iframe src="https://www.google.com/maps?q=<?php the_field('location'); ?>&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php endwhile; endif; ?>

<div class="top_title_group">
  <div class="loc_subtitle">
    <h3>Submit Information to Place Order</h3>
  </div>
  <div class="loc_title">
    <h2>RESERVE A TABLE</h2>
  </div>
</div>

<img class="top_image" src="wp-content/themes/quatroformaggi/img/plate2.png" alt="Plate">

<div class="form_reservation">
  <form class="form_item" action="index.html" method="post">
    <label class="form_label" for="name">Your Name</label><br>
    <input class="form_item" type="text" name="name" autocomplete="off" label="Your name" required="required" /><br>
    <label class="form_label" for="email">Your Email</label><br>
    <input class="form_item" type="text" name="email" autocomplete="off" label="Your name" required="required" /><br>
    <label class="form_label" for="phone">Phone Number</label><br>
    <input class="form_item" type="text" name="phone" autocomplete="off" label="Your name" required="required" /><br>
    <label class="form_label" for="people">Table For</label><br>
    <select name="people" class="form_item" required="required">
      <option value="1" selected="selected">1 Person</option>
      <option value="2">2 Persons</option>
      <option value="3">3 Persons</option>
      <option value="4">4 Persons</option>
    </select><br>
    <label class="form_label" for="place">Place</label><br>
    <select name="place" class="form_item" required="required">
      <option value="1" selected="selected">The Chef's Cafeteria - Liège</option>
      <option value="2">BeCentral Resto - Brussels</option>
      <option value="3">The Honkytonk - Houte-Si-Plout</option>
    </select><br>
    <label class="form_label" for="time">Select time</label><br>
    <input class="form_item" type="time" name="time" required="required" placeholder="12:30 AM"/><br>
    <label class="form_label" for="date">Select Date</label><br>
    <input class="form_item" type="date" name="date_debut" placeholder="31 December 2019"><br>
    <label class="form_label" for="message">Your Message</label><br>
    <textarea class="form_item" name="message" rows="8" cols="45" autocomplete="off" required="required"></textarea><br>
  </form>
  <a class="button_rest" href="#">RESERVE NOW</a>
</div>

<div class="post_text">
  <div class="top_title_group">
    <div class="top_subtitle">
      <h3>LET'S DISCOVER FOOD</h3>
    </div>
    <div class="top_title">
      <h2>DISCOVER OUR MENU</h2>
    </div>
  </div>
  <p class="p_centered">For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates. We love food, lots of different food, just like you.</p>
  <a class="button_rest" href="page-menu.php">View the full Menu</a>
</div>

<img class="bottom_hach" src="wp-content/themes/quatroformaggi/img/hachures-grises.png" alt="Hachures">

<div class="recipes">
  <div class="top_title_group">
    <div class="top_subtitle">
      <h3>Latest updated</h3>
    </div>
    <div class="top_title">
      <h2>RECIPES BLOG</h2>
    </div>
  </div>
  <?php wppln_last_posts('2','4','true'); ?>
</div>
<?php get_footer(); ?>
