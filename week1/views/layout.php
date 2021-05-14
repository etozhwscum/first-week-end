<?php /* @var $content_view View */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>

<header>
    <nav class="navbar-container">
        <a href="/site/index">Main</a>
        <a href="/site/service">Service</a>
        <a href="/site/portfolio">Portfolio</a>
        <a href="/site/contact">Contacts</a>
    </nav>
</header>

<main>
    <?php include $content_view;?>
</main>

<footer>

</footer>

</body>
</html>