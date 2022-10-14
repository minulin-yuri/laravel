<?php include_once __DIR__ . "/../layouts/header.php" ?>
<?php include_once __DIR__ . "/../layouts/menu.php" ?>

<section>
    <div class="container">
        <h2><?= $news['title'] . ' ' . $news['id'] ?></h2>
        <p><?= $news['text'] ?></p>
    </div>
</section>

<?php include_once __DIR__ . "/../layouts/footer.php" ?>