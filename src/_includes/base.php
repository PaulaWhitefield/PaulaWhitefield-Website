---
site_title: Paula Whitefield
site_tagline: Personal Website
site_author: Paula Whitefield
site_author_url: /

images_url: /assets/images
webfonts_url: /assets/webfonts

content_placeholder: {{ content }}

---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ): echo $metadata['page_title'] . " - "; endif; if( isset( $metadata['article_title'] ) && $metadata['article_title'] ): echo $metadata['article_title'] . " - Blog - "; endif; echo $metadata['site_title']; ?></title>

        <link rel="stylesheet" type="text/css" href="--- metadata.webfonts_url ---/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">

        <style type="text/css">
            body { background-image: url( '--- metadata.images_url ---/gifs/colorful-shining-stars.gif' ); }
            hr { background-image: url( '--- metadata.images_url ---/gifs/twinkling-blue-stars-line.gif' ); }
        </style>
    </head>
    
    <body>
        <div class="header">
            <div class="logo">
                <img src="--- metadata.images_url ---/gifs/purple-flower.gif">
            </div>

            <div class="title">
                <h1><a href="/">--- metadata.site_title ---</a></h1>
                <p><b><i>--- metadata.site_tagline ---</i></b></p>
            </div>
        </div>

        <hr>

        <p class="navbar">
            <a href="/"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "home" ) echo ' class="current"'; ?>>Home</a>
            <a href="/about"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "about" ) echo ' class="current"'; ?>>About</a>
            <a href="/blog"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "blog" ) echo ' class="current"'; ?>>Blog</a>
            <a href="/sites"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "sites" ) echo ' class="current"'; ?>>Sites</a>
        </p>

        <hr>

        <?php if( isset( $metadata['article_title'], $metadata['article_author'], $metadata['article_date'], $metadata['article_time'] ) ): ?>
            <h2>--- metadata.article_title ---</h2>

            <p><i>Authored by --- metadata.article_author --- on --- metadata.article_date --- at --- metadata.article_time ---.</i></p>
        <?php endif; ?>

        {{ content }}
    
        <hr>
    
        <p style="text-align: center;">Site by <a href="--- metadata.site_author_url ---">--- metadata.site_author ---</a>.</p>

        <script type="text/javascript" src="/assets/js/script.js"></script>
    </body>
</html>
