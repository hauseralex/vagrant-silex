<!-- Ich habe versucht, die Login Funktion mit einzubauen - das hat aber leider nicht geklappt. Deswegen habe ich diese
Parts auskommentiert bzw. den ganzen Teil des Codes im Anschluss als Komme ntar eingefügt. -->



<?php
use Symfony\Component\HttpFoundation\Request;

//Verlinkung der Homeseite
$app->get('/home', function () use ($app) {
    return $app ['templating']->render(
        'home.html.php'
    );
});

//Verlinkung der Loginseite
$app->match('/login', function () use ($app) {
    $author = "";
    return $app ['templating']->render(
        'login.html.php',
        array(
            'author' => $author
        )
    );
});

//Verlinkung der Seite zum Erstellen der Blogeinträge
$app->match('/blog', function (Request $request) use ($app) {
    $error = false; //Zur Überprüfung, ob alle Eingaben gemacht wurden
    if ($request->isMethod("post")) {
        $title = $request->get("title", ""); //Übergabe des Titels, der Message
        $message = $request->get("message", "");
        if ($title == "" || $message == "") {
            $error = true;
        } else {
            $dbConnection = $app['db'];
            $createdAt = date('y-m-d');

            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $message,
                    'created_at' => $createdAt
                )//Einfügen in Datenbank
            );
            return $app ['templating']->render(
                'success.html.php'
            );//Aufruf eines Templates mit Bestätigungsmeldung
        }
    }
    return $app ['templating']->render(
        'blog.html.php',
        array("error" => $error)
    );
});

$app->match('/blog_post', function (Request $request) use ($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll(
        'SELECT * FROM blog_post'
    );
    return $app ['templating']->render(
        'blog_post.html.php',
        array("posts" => $posts) //Übergabe der Postinhalte an blog_post.html.php
    );
});

$app->get('/blog_post/{id}', function ($id) use ($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->fetchAssoc(
        'SELECT * FROM blog_post WHERE id = ?',
        array($id)
    );
    return $app ['templating']->render(
        'full_blog_post.html.php',
        array("post" => $post) //Übergabe des einzelnen Posts
    );
});


/*
 * $app->match('/login', function () use ($app) {
    $author = "";
    return $app ['templating']->render(
        'login.html.php',
        array(
            'author' => $author
        )
    );

});

$app->match('/blog', function (Request $request) use ($app) {
    $error = false;
    if ($request->isMethod("post")) {
        $title = $request->get("title", "");
        $message = $request->get("message", "");
        $author = $request->get("author", "");
        if ($title == "" || $message == "") {
            $error = true;
        } else {
            if ($author == "") {
                return $app ['templating']->render(
                    'login.html.php'
                );
            } else {
                $dbConnection = $app['db'];
                $createdAt = date('y-m-d');

                $dbConnection->insert(
                    'blog_post',
                    array(
                        'title' => $title,
                        'text' => $message,
                        'created_at' => $createdAt,
                        //'author' => $author
                    )
                );
                return $app ['templating']->render(
                    'success.html.php'
                );
            }

        }
    }
    return $app ['templating']->render(
        'blog.html.php',
        array("error" => $error)
    );

});

 */