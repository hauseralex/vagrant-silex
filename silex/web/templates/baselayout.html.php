<!-- Navigationsleiste & Grundeinstellungen, die in jedem anderen Template importiert werden -->
<?php
/**
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$title = $slots->get('title');
//$author = $slots->get('author');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $slots->output('title', 'My first Bootstrap website!') ?></title>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylesheet.css" type="text/css"/>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Toggle navigation zur besseren Bedienung für mobile Geräte -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../home">MyBlog</a>
        </div>

        <!-- Menüpunkte der Navigationsleiste -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php echo(($title == "Home") ? 'class="active"' : '') ?>>
                    <a href="../home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home</a></li>
                <li <?php echo(($title == "Blog") ? 'class="active"' : '') ?>>
                    <a href="../blog"><span class="glyphicon glyphicon-pencil" aria hidden="true"></span> Blog</a></li>
                <li <?php echo(($title == "Blogeinträge") ? 'class="active"' : '') ?>>
                    <a href="../blog_post"><span class="glyphicon glyphicon-book" aria hidden="true"></span>
                        Blogeinträge</a>
                </li>
                <li>
                    <a href="../login">
                        <button type="button" class="btn btn-default navbar-btn">Sign in</button>
                    </a>
                </li>
                <?php if ($author != ""): ?><!-- Tritt nicht ein, da der Login nicht funktioniert-->
                <li>
                    <p class="navbar-text navbar-right">Signed in as <a href="#"
                                                                        class="navbar-link"><?php echo($author == 'author') ?></a>
                    </p>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <?php $slots->output('_content') ?><!-- Ausgabe des Inhalts aus home.html.php -->
</div>
</body>
</html>
