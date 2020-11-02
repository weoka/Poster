<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Post;
use App\Category;

$post = new Post("Este es un día especial", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", new Author("José"), new Category("Series y películas"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body style="text-align:center;">
    <h1><?php echo $post->title ?></h1>
    <h3>Escrito por: <?php echo $post->author->name ?></h3>
    <h3>Categoría: <?php echo $post->category->name ?></h3>
    <p><?php echo $post->content ?></p>
</body>
</html>