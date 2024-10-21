---
page_title: Sites
current_nav_item: sites
layout: src/_includes/base.php
---

<h2>Sites</h2>

<p>Here is a list of other websites that Paula is involved in.</p>

<hr>

<?php

$sites = array();

$sites[] = array
(
    "name" => "Paula Whitefield",
    "url" => "https://paulawhitefield.webaddr.net",
    "description" => "This website you are currently on.",
);

$sites[] = array
(
    "name" => "Paula's World",
    "url" => "https://paulasworld.webaddr.net",
    "description" => "Second website.",
);

$sites[] = array
(
    "name" => "Angelica Henderson",
    "url" => "https://angelicahenderson.webaddr.net",
    "description" => "A website for best friend, Angel.",
);

$sites[] = array
(
    "name" => "Little Innocent Angel",
    "url" => "https://littleinnocentangel.webaddr.net",
    "description" => "A blog site for best friend, Angel.",
);

$sites[] = array
(
    "name" => "Anne Warren",
    "url" => "https://annewarren.webaddr.net",
    "description" => "A website for a good friend, Anne.",
);

?>

<div class="sites-list">
    <?php foreach( $sites as $site ): ?>
    <div class="site">
        <div class="name"><?php echo $site['name']; ?></div>
        <div class="url"><a href="<?php echo $site['url']; ?>" target="_blank"><?php echo $site['url']; ?></a></div>
        <div class="description"><?php echo $site['description']; ?></div>
        <div class="button"><a href="<?php echo $site['url']; ?>" target="_blank">Visit Site</a></div>
    </div>
    <?php endforeach; ?>
</div>

