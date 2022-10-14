<?php include_once __DIR__ . "/layouts/header.php" ?>
<?php include_once __DIR__ . "/layouts/menu.php" ?>

<section class="features_news">
    <div class="container">
        <div class="features_news__container">
            <div class="col-md-7">
                <div class="features_article">
                    <div class="features_article__image">
                        <img src="../img/feature-top.jpg" alt="feature-top">
                    </div>
                    <div class="features_article__inner">
                        <div class="features_article__title">
                            <h2>
                                <a href="/article" class="black_text mrg-0">Gadget user good news </a>
                            </h2>
                        </div>
                        <div class="features_article__date">
                            <span>Stive Clark. Aug 4, 2022</span>
                        </div>
                        <div class="features_article__content">
                            <p>In a move to address mounting concerns about security on Android, Google and Samsung are
                                now issuing.</p>
                        </div>
                        <div class="features_article__social">

                            <span><i class="fa fa-share-alt"></i><a href="#" class="black_text">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#" class="black_text">4</a>Comments</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="features_static">
                    <div class="features_static__wrapper">
                        <div class="features_static__image">
                            <img src="../img/feature-static1.jpg" alt="feature-static1">
                        </div>
                        <div class="features_article__inner">
                            <div class="features_article__title">
                                <h2>
                                    <a href="/article" class="black_text mrg-0">Gadget user good news </a>
                                </h2>
                            </div>
                            <div class="features_article__date">
                                <span>Stive Clark. Aug 4, 2022</span>
                            </div>
                            <div class="features_article__content">
                                <p>In a move to address mounting concerns about security on Android, Google and Samsung are
                                    now issuing.</p>
                            </div>
                            <div class="features_article__social">

                                <span><i class="fa fa-share-alt"></i><a href="#" class="black_text">424</a>Shares</span>
                                <span><i class="fa fa-comments-o"></i><a href="#" class="black_text">4</a>Comments</span>

                            </div>
                        </div>
                    </div>
                    <div class="features_static__wrapper">
                        <div class="features_static__image">
                            <img src="../img/feature-static2.jpg" alt="feature-static2">
                        </div>
                        <div class="features_article__inner">
                            <div class="features_article__title">
                                <h2>
                                    <a href="/article" class="black_text mrg-0">Gadget user good news </a>
                                </h2>
                            </div>
                            <div class="features_article__date">
                                <span>Stive Clark. Aug 4, 2022</span>
                            </div>
                            <div class="features_article__content">
                                <p>In a move to address mounting concerns about security on Android, Google and Samsung are
                                    now issuing.</p>
                            </div>
                            <div class="features_article__social">

                                <span><i class="fa fa-share-alt"></i><a href="#" class="black_text">424</a>Shares</span>
                                <span><i class="fa fa-comments-o"></i><a href="#" class="black_text">4</a>Comments</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="category">
    <div class="container">
        <?php foreach ($news as $key => $item) : ?>
            <div class="category__container">
                <div class="category__title">
                    <h3 class="black_text"><a href="<?= route('categoriesOne', $key) ?>"><?= $key ?></a></h3>
                    <div class="category__border"></div>
                </div>
                <div class="category__content">
                    <?php foreach ($item as $card) : ?>
                        <div class="news_card">
                            <img src="../img/category_img.jpg" alt="category_img">
                            <div class="news_card__title">
                                <h3 class="black_text"><a href="<?= route('newsOne', $card['id']) ?>" class="mrg-0 black_text"><?= $card['title'] . ' ' . $card['id'] ?></a> </h3>
                            </div>
                            <div class="news_card__date">
                                <span>10Aug- 2015, by: Eric joan</span>
                            </div>
                            <div class="news_card__content">
                                <p><?= $card['text'] ?></p>
                            </div>
                            <div class="news_card__social">
                                <span><i class="fa fa-share-alt"></i><a href="#" class="black_text">424</a>Shares</span>
                                <span><i class="fa fa-comments-o"></i><a href="#" class="black_text">4</a>Comments</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php include_once __DIR__ . "/layouts/footer.php" ?>