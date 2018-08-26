<?php get_header(); ?>

<?php the_post(); ?>
    <div id="swipe-mobile">
        <div class="content">

            <div class="news">
                <div class="post">
                    <div class="wrap-center">

                        <div class="wrap-title">
                            <!--<p></p>-->
                            <div class="data">
                                <span><?php the_date(); ?><i class="icon icon_count">0</i></span>
                            </div>
                            <h1 style="padding-bottom: 0px;"><?php the_title(); ?></h1>
                            <p style="font-size: 12px; text-transform: none; padding-bottom: 8px;">Автор: , фото: </p>

                        </div>

                        <div class="wrap-section clearfix">

                            <!--Widgets-->
                            <aside>
	                            <?php dynamic_sidebar("RightSidebar"); ?>
                            </aside>

                            <section>

                                <style type="text/css">
                                    .post section {
                                        float: left;
                                        margin-left: 0px;
                                        max-width: calc(100% - 340px);
                                        width: 100%;
                                    }

                                    @media only screen and (max-width: 767px) {
                                        .post section {
                                            margin-left: 0;
                                            width: 100%;
                                            float: none;
                                            max-width: 100%;
                                        }
                                    }
                                </style>

                                <div class="img">
	                                <?php the_post_thumbnail( "large" ); ?>
                                </div>

                                <div class="name"></div>

                                <div class="js-mediator-article">
                                    <h3></h3>
                                </div>

                                <div class="js-mediator-article">
	                                <?php the_content(); ?>
                                </div>

                            </section>

                            <div class="img-b mobile-hide"></div>

                        </div>

                    </div>

                    <!-- post end-->

                </div>

            </div>
            <!-- new-links end-->

        </div>
    </div>

<?php get_footer(); ?>