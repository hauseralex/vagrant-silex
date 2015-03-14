<!-- Loginseite; u.a. erreichbar über den SignIn Button
Kommt nicht zum Einsatz, bzw funktioniert nicht -> Beschreibung in controllers.php-->
<?php
/**
 * @var $view
 */
$view->extend("baselayout.html.php");
?>

<form action="/login" method="post"><!-- "Aktivierung" des Buttons-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Du musst dich einloggen, um Blogeinträge verfassen zu können!</h3>
        </div>
        <div class="panel-body">
            Gib dazu deinen Namen ein:
            <input type="text" class="form-control" id="author" name="author" placeholder=""><br>

            <p>
                <button type="submit" class="btn btn-primary">Login</button>
            </p>
        </div>
    </div>
</form>

