<!-- Anzeige eines vollständigen Blogeintrages -->
<?php
$view->extend("baselayout.html.php");
$view["slots"]->set("title", "Blogpost");

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post["title"] . " " . $post["created_at"] ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $post["text"] ?>
    </div>
</div>

