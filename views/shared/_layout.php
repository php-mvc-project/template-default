<?php
use PhpMvc\Html, PhpMvc\View;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?=Html::getTitle()?> - My Application</title>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/content/styles/app.css" />
    <script src="/vendor/components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?=Html::actionLink('My Application', 'index', 'home', null, array('class' => 'navbar-brand'))?>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><?=Html::actionLink('Home', 'index', 'home')?></li>
                        <li><?=Html::actionLink('About', 'about', 'home')?></li>
                        <li><?=Html::actionLink('Contact', 'contact', 'home')?></li>
                    </ul>
                    <?php 
                        // render partial view ~/views/shared/_login.php
                        Html::render('_login');
                    ?>
                </div>
            </div>
        </hav>
    </header>

    <div class="container">
        <?php
            // render current view
            Html::renderBody();
        ?>
    </div>

    <hr />

    <footer>
        <div class="container">
            Copyright &copy; My Application, <?=date('Y')?>
        </div>
    </footer>
</body>
</html>