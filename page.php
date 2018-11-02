<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h1><?php the_title(); ?> </h1>

<div id="entry">

<?php the_content(); ?>

<div style="text-align:right"><?php edit_post_link('<b>EDIT THIS PAGE</b>', ' '); ?></div>

</div>


<?php comments_template(''); ?>
<?php endwhile; ?>



<?php else : ?>

<h1>Aw, hamburgers!</h1>

<div id="entry">
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>

</div>

<?php endif; ?>
<div style="clear:both;"></div>
</div>

<?php get_footer(); ?>