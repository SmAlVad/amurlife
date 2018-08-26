<?php get_header(); ?>


<div class="content content_life">
    <div class="life-logo">
        <h1>Халя Баля</h1>
    </div>

    <div class="news-life" id="container-infinite">
        <div class="news-life__holder">
            <div class="news-life__row">
            </div>

	        <?php if ( have_posts() ): ?>

		        <?php while ( have_posts() ): the_post(); ?>

                <?php $category = get_the_category(); ?>

                    <div class="news-life__column">
                        <div class="news-life__item news-life__item_large">
	                        <?php the_post_thumbnail("thumbnail",[
	                                "class" => "news-life__image",
                            ]); ?>

                            <a href="<?php the_permalink(); ?>" class="news-life__link">
                                <div class="news-life__box">
                                    <div class="news-life__title"><?php the_title(); ?></div>
                                    <div class="news-life__text"></div>
                                    <div class="news-life__meta-line">
                                        <div class="news-life__date"><?= get_the_date("j.n"); ?>&nbsp;<?= get_the_time(); ?></div>
                                        <div class="news-life-stat news-life__stat">
                                            <div class="news-life-stat__item"><i class="fa fa-comments-o news-life-stat__icon"></i>
                                                <div class="news-life-stat__count">5</div>
                                            </div>
                                            <div class="news-life-stat__item"><i class="fa fa-eye news-life-stat__icon"></i>
                                                <div class="news-life-stat__count">4485</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="news-life-tag news-life__tag">
                                <div class="news-life-tag__list">
                                    <div class="news-life-tag__item">
                                        <a href="#" class="news-life-tag__link"><?= $category[0]->cat_name; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        <?php endwhile; ?>

	        <?php else: ?>
                <h2>Записей нет</h2>
	        <?php endif; ?>
        </div>
    </div>
    <div class="pagination" style="margin-top: 14px;">
        <a href="ajax/ajax-new1.html">1</a>
        <a href="ajax/ajax-new2.html">2</a>
        <a href="ajax/ajax-new3.html">3</a>
        <a href="ajax/ajax-new4.html">4</a>
    </div>
</div>
</div>

<?php get_footer(); ?>


