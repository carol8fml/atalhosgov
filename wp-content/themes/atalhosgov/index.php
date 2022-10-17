<?php get_header(); ?>

<h1>Atalhos Gov</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            •
            <?php
            $category = get_the_category();
            if ($category[0]) {
                echo $category[0]->cat_name;
            }
            ?> •
            <?php print get_the_date(); ?>
        </a>

    <?php endwhile;
else : ?>
    <p>Desculpe, nenhum não foi encontrado.</p>
<?php endif; ?>
