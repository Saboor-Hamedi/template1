    <?php
    use App\database\Database;
    require_once __DIR__ . '/../../../vendor/autoload.php';
    $db = Database::getInstance();
    $db->getConnection();
    session_start();
    if (isset($_SESSION["guest_login_id"])) {
    $guest_login_id = $_SESSION["guest_login_id"];
    session_write_close();
    } else {
    session_unset();
    session_write_close();
    $url = "/";
    header("Location: $url");
    }
    $posts = $db->select("SELECT id, email,  name,lastname, guest_id, created_at FROM guest_login WHERE guest_id = '$guest_login_id'");
    if (is_array($posts) || is_object($posts)) {
    if (mysqli_num_rows($posts) > 0) {
    foreach ($posts as $post) {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Blog Template · Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
    </head>
        <body>
            <div class="container">
                <nav class="nav nav-bar">
                    <a class="p-2 text-muted " href="home.php">Home</a>
                    <a class="p-2 text-muted " href="guest.php">All courses</a>
                    <a class="p-2 text-muted" href="../admin/logout.php">Login</a>
                    <div class="left">
                    <a class="p-2 text-muted" href="#"><?php echo $guest_login_id; ?></a>
                    <a class="p-2 text-muted" href="#"><?php echo $post['name']; ?>  </a>
                    </div>
                </nav>
            <?php } ?>
        <?php   } ?>
    <?php  } ?>
    <div class="jumbotron text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-normal"><?php echo $post['email']; ?></h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        </div>
    </div>
        <div class="card-body p-5 text-center">
            <h1>The world's largest selection of courses, <?php echo $post['name']; ?></h1>
        </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>