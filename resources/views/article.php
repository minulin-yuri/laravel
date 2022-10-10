<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
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
        <section>
            <div class="container">
                Здесь будет страница определенной новости!!!
            </div>
        </section>

        <?php include_once "footer.php" ?>
    </div>
</body>

</html>