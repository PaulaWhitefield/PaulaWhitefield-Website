<?php

$page_title = $article_title . "Blog";

$page_content = function( $article_title, $article_author, $article_date, $article_time, $article_content )
{
    include __DIR__ . DIRECTORY_SEPARATOR . "config.php";
?>

<h2><?php echo $article_title; ?></h2>

<p><i>Authored by <?php echo $article_author; ?> on <?php echo date( $blog_datetime_format, strtotime( $article_date . " " . $article_time ) ); ?>.</i></p>

<?php $article_content(); ?>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "base.php";
