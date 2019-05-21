<?php get_header(); ?>
    <body>
        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Notícias e Eventos</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed">
                    <div class="row">
                        <div class="col-md-8">

                            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                            <div class="content blog-list">
                                <div class="blog-wrapper clearfix">
                                    <div class="blog-meta">
                                        <h3> <?php the_title(); ?> </h3>
                                        <ul class="list-inline">
                                            <li><? echo get_the_date('d/m/y');?></li>
                                        </ul>
                                    </div><!-- end blog-meta -->

                                    <div class="blog-media">
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));?>
                                    </div><!-- end media -->

                                    <div class="blog-desc-big">
                                        <?php the_content(); ?>
                                        <a class="lorange">Postado por Equipe Solenoide</a>
                                        <hr class="invis">
                                    </div><!-- end desc -->
                                </div><!-- end blog -->
                            </div><!-- end content -->
                            
                            <hr>

                            <?php comments_template(); ?>

                            <?php endwhile; ?>
                            <?php else : get_404_template(); endif; ?>

                        </div><!-- end col -->

                        <?php get_sidebar(); ?>

                    </div><!-- end row -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>


<?php get_footer(); ?>