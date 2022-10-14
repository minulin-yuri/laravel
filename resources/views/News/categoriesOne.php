<?php include_once __DIR__ . "/../layouts/header.php" ?>
<?php include_once __DIR__ . "/../layouts/menu.php" ?>

<section class="category">
    <div class="container">
        <h2><?= $category ?></h2>

        <div class="category__container">
            <div class="category__content">
                <?php foreach ($news as $card) : ?>
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

    </div>
</section>
<?php include_once __DIR__ . "/../layouts/footer.php" ?>