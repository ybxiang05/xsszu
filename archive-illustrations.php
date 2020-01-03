
<?php get_header();?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="archive-illustrations-title">Illustrations</h1>
            </header><!-- .page-header -->
            <div class="illustrations-container">
                <?php while ( have_posts() ): the_post(); ?>
                    <article class="<?php post_class('illustration-wrapper');?>">
                        <div class="illustration-img">
                            <?php
                            if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('full');?>
                                </a>
                            <?php endif;?>
                        </div>
                    </article>  
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </main>
</div>