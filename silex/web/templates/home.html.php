<!-- Startseite des Blogs, mit Beispielinhalt
Ansicht ändert sich je nach Größe des Bildschirmfensters-->
<?php
/**
 * @var $view
 */
$view->extend("baselayout.html.php");
$view["slots"]->set("title", "Home");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <div class="jumbotron">
                    <h1>My first Bootstrap website!</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    <p><a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-search"
                                                                                      aria-hidden="true"></span> Search</a>
                    </p>
                </div>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
            </ul>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div> <!-- /container -->