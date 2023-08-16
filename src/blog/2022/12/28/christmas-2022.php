<?php

$article_title = "Christmas 2022";
$article_description = "A look at what I got for Christmas 2022.";
$article_author = "Paula Whitefield";
$article_date = "2022-12-28";
$article_time = "19:25";

$article_content = function()
{
?>

<p>A look at what I got for Christmas 2022.</p>

<p>From my parents, I got two new playStation consoles and some games.</p>

<p>My relatives gave me some money which will be spent on some new clothes and some more games and maybe some DVDs.</p>

<p>What did you get this year? Let me know.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "blog-article.php";
