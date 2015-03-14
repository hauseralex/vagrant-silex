<!-- Übersicht alles Blogeinträge -->
<?php
$view->extend("baselayout.html.php");
$view["slots"]->set("title", "Blogeinträge");
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Übersicht</h3>
    </div>
    <ul class="list-group">
        <?php foreach ($posts as $post) { ?> <!-- for-Schleife zur Anzeige aller Einträge mittels ID -->
        <li class="list-group-item">
            <div id=title><?php echo $post["title"] ?></div>
            <!-- mittels div-Container zur besseren Formatierung mit CSS -->
            <div id=date>vom <?php
                echo $post["created_at"] ?></div>
            <br/>
            <?php echo substr(($post["text"]), 0, 15) ?><a href="/blog_post/<?php echo $post["id"] ?>">[...]</a>
            <!-- Abkürzung der Textvorschau durch substr() -->
            <br>
            <?php //echo $post["author"]?>
            <?php
            } ?>
        </li>
    </ul>
</div>