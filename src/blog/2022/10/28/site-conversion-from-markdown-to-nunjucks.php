<?php

$article_title = "Site Conversion from Markdown to Nunjucks";
$article_description = "It was a fun challenge to try doing it all in Markdown, but Nunjucks is better.";
$article_author = "Paula Whitefield";
$article_date = "2022-10-28";
$article_time = "04:00";

$article_content = function()
{
?>

<p>It was a fun challenge to try doing it all in Markdown, but Nunjucks is better.</p>

<p>As I learn about how powerful HTML can be, I found Markdown to be rather limiting. For example there was no native way to create hyperlinks that opened in a new tab/window, and would either need some complex configuration which is over my head or to use normal HTML, and if I'm going to use HTML, then I might as well not use Markdown.</p>

<p>Nunjucks is a templating language that allows for dynamic things to be done at build time, similar to how you could do it in PHP except its all pre-generated ahead of time (build time) rather than for every page load (request time). This makes the website fast.</p>

<p>It was some task going over everything and changing it all to HTML with Nunjucks, but I think I got it all.</p>

<p>Anyway, thanks for reading, and have a great day.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "blog-article.php";
