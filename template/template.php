<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
        <link rel="stylesheet" href="stylesheet.css">
        <script type="text/javascript" src="./src/js/script.js"></script>
        <script type="text/javascript" src="./src/js/accounting.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="container">
                    <h1><?php siteName(); ?></h1>
                </div>
            </header>
            <article>
                <?php pageContent(); ?>
            </article>
        </div>
        <footer>
            <div class="footer">
                <div class="col align-self-center">
                    <small>&copy;<?php echo date('Y'); ?> David Kirschman<br><?php siteVersion(); ?></small>
                </div>
            </div>
        </footer>
        <script>format();</script>
    </body>
</html>