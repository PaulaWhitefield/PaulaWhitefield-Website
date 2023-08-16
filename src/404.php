<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$page_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "config.php";
?>

<h2>Not Found (404)</h2>

<p>Oops, looks like there is nothing to see here. :/</p>

<p>Return to the <a href="/">home</a> page or explore the other pages to see if you can find what you are looking for.</p>

<h3>Hugs. &lt;3</h3>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
