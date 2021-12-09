<?php
//require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/bootstrap.php';
//checkSession();

$meta = [];
$meta['description'] = "Posts MicroTrain2111 Post List";
$meta['keywords'] = "posts, MicroTrain2111, post list";

$content="<h1>MicroTrains Posts</h1>";
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<div><a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a></div>";
}

$content .="<p><a href=\"add.php\">New Post</a><br>";

include '../../core/layout.php';