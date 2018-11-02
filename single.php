<?php get_header(); ?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php previous_post('<span class="upp">&laquo; %</span>', '', 'yes'); ?>    
<?php next_post('<span class="up">% &raquo;</span>', '', 'yes'); ?>

<h6><a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><?php the_title(); ?></a></h6>
<h3>Posted on <?php the_time('F jS, Y') ?> at <?php the_time('h:i A') ?>.</h3>
<div id="entry">

<?php the_content(); ?>


<b>Categorized as</b> <?php the_category(', ') ?> <?php edit_post_link('Edit', '| '); ?>
<br /><?php the_tags( '<b>Tags:</b> ', ', ', ''); ?>

</div>

<br />


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


</div>
<?php get_footer(); ?>