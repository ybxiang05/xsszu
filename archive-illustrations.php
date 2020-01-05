
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
                                    <?php the_post_thumbnail('full');?>
                            <?php endif;?>
                        </div>
                        <div class="illustration-content">
                            <?php
                            //the_title('<h2 class="illustration-title">','</h2>');
                            //the_content('<p class="illustration-desc">','</p>')?>
                        </div>
                    </article>  
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </main>
</div>