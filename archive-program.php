<?php
get_header();
pageBanner();
?>


<div class="container container--narrow page-section">
    <ul class="link-list min-list">
        <?php
        while (have_posts()) {
            the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
        }
        echo paginate_links();
        wp_reset_postdata();
        ?>
    </ul>
</div>
<?php
get_footer();
?>