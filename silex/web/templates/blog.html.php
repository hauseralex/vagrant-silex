<!-- Seite zum Erstellen neuer Blogeinträge-->
<?php
$view->extend("baselayout.html.php");
$view["slots"]->set("title", "Blog");
?>

<div class="panel panel-default" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">
        <div class="panel-title">Neuer Beitrag</div>
    </div>
    <br>

    <?php if ($error): ?><!-- Überprüfung, ob alle Felder ausgefüllt sind, falls nicht taucht Fehlermeldung über Eingabefeldern auf-->
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Bitte alle Felder ausfüllen!</h3>
        </div>
    </div>
    <?php endif ?>

    <div class="panel-body">
        <form action="/blog" method="post"><!-- "Aktivierung" des Buttons-->
            <label for="text">Titel</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="..."><br>
            <label for="textarea">Message</label>
            <textarea id="message" name="message" class="form-control" cols="50" rows="10"
                      placeholder="..."></textarea><br>

            <p>
                <button type="submit" class="btn btn-primary">Absenden</button>
            </p>
        </form>
    </div>
</div>