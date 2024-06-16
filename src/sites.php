---
page_title: Sites
current_nav_item: sites
layout: src/_includes/base.php
---

<?php

$sites = array();

$sites[] = array
(
    "name" => "Paula Whitefield",
    "url" => "https://paulawhitefield.bypw.me",
    "description" => "My Personal Website",
);

$sites[] = array
(
    "name" => "Angelica Henderson",
    "url" => "https://angelicahenderson.bypw.me",
    "description" => "A website for my best friend, Angel.",
);

$sites[] = array
(
    "name" => "Little Innocent Angel",
    "url" => "https://littleinnocentangel.bypw.me",
    "description" => "A blog site for my best friend, Angel.",
);

$sites[] = array
(
    "name" => "Anne Warren",
    "url" => "https://annewarren.bypw.me",
    "description" => "A website for my good friend, Anne.",
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

