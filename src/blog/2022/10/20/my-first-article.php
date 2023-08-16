<?php

$article_title = "My First Article";
$article_description = "This is my very first blog article.";
$article_author = "Paula Whitefield";
$article_date = "2022-10-20";
$article_time = "03:48";

$article_content = function()
{
?>

<p>This is my very first blog article.</p>

<p>I wrote it myself using the Markdown format.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "blog-article.php";
