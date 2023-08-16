<?php

$article_title = "Color Scheme Previews: Now Available";
$article_description = "Try the site in a different color scheme to the one your device is set to.";
$article_author = "Paula Whitefield";
$article_date = "2022-10-28";
$article_time = "05:30";

$article_content = function()
{
?>

<p>Try the site in a different color scheme to the one your device is set to.</p>

<p>If you are thinking of perhaps switching your device's color mode and want to know how one of your favourite websites (hopefully mine) looks, then try the color scheme previewer at the bottom of each page to see how the current page looks in the alternate color mode.</p>

<p>Please note, JavaScript is required to make this work, so if you do not see the previewer at the bottom, then you either don't have JavaScript enabled or your browser does not support the technology behind the previewer.</p>

<p>Let me know what you think of this feature. Hugs.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "blog-article.php";
