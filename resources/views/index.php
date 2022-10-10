<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <link href="../fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="wrapper">
        <div class="wrapper__top">
            <header class="header">
                <div class="container header__container">
                    <div class="header__left header__part">
                        <p class="upper_text middle_text">
                            <?= date("l . j F . Y") ?>
                        </p>
                    </div>
                    <div class="header__center header__part">
                        <div class="header__logo">
                            <h1 class="upper_text black_text">tech</h1>
                        </div>
                        <p class="middle_text">- YES! YOUR NEWS! -</p>
                    </div>
                    <div class="header__right header__part">
                        <?php if (!isset($user)) : ?>
                            <a href="/login" class="upper_text middle_text grey_text">LOGIN</a> /
                            <a href="/login" class="upper_text middle_text grey_text">register</a>
                        <?php else : ?>
                            <p class="upper_text middle_text grey_text">Hello, <?= $user ?></p> /
                            <a href="/" class="upper_text middle_text grey_text">exit</a>
                        <?php endif; ?>
                    </div>
            </header>
            <?php include_once "menu.php" ?>

        </div>
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
                <div class="category__container">
                    <div class="category__title">
                        <h3 class="black_text">Popular News</h3>
                        <div class="category__border"></div>
                    </div>
                    <div class="category__content">
                        <?php for ($i = 1; $i < 7; $i++) : ?>
                            <div class="news_card">
                                <img src="../img/category_img.jpg" alt="category_img">
                                <div class="news_card__title">
                                    <h3 class="black_text"><a href="/article" class="mrg-0 black_text">Sony launce a new Android tablets for new
                                            generation</a> </h3>
                                </div>
                                <div class="news_card__date">
                                    <span>10Aug- 2015, by: Eric joan</span>
                                </div>
                                <div class="news_card__content">
                                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.</p>
                                </div>
                                <div class="news_card__social">
                                    <span><i class="fa fa-share-alt"></i><a href="#" class="black_text">424</a>Shares</span>
                                    <span><i class="fa fa-comments-o"></i><a href="#" class="black_text">4</a>Comments</span>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once "footer.php" ?>
    </div>
</body>

</html>