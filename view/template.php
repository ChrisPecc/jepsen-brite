<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jepsen-Brite is a website for creating, publicizing and finding great events organised in Belgium.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">

    <link href="./public/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="./public/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/base.css">
    <link href="./public/css/main.d8e0d294.css" rel="stylesheet">

    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <?php require('./view/header.php') ?>
        <!-- <?php require('./view/navBar.php') ?> -->

        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
        <?= $content ?>
    </div>
    <?php require('./view/footer.php') ?>
</body>

</html>