---
content_placeholder: {{ content }}

remote_assets_path: https://assets.paulawhitefield.weburl.net
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ): echo $metadata['page_title'] . " - "; endif; if( isset( $metadata['article_title'] ) && $metadata['article_title'] ): echo $metadata['article_title'] . " - Blog - "; endif; ?>Paula Whitefield</title>

        <link rel="stylesheet" type="text/css" href="--- metadata.webfonts_url ---/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
    </head>
    
    <body>
        <header>
            <h1><img src="/assets/images/logos/pw-logo-aug24-white.png" alt="Paula Whitefield"></h1>

            <label for="navbar-toggle-checkbox" id="navbar-toggle-label">Menu</label>
            <input type="checkbox" id="navbar-toggle-checkbox">

            <nav>
                <a href="/"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'home' ) echo ' class="current"'; ?>>Home</a>
                <a href="/gaming"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'gaming' ) echo ' class="current"'; ?>>Gaming</a>
                <a href="/music"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'music' ) echo ' class="current"'; ?>>Music</a>
                <a href="/blog"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'blog' ) echo ' class="current"'; ?>>Blog</a>
                <a href="/sites"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'sites' ) echo ' class="current"'; ?>>Sites</a>
            </nav>
        </header>

        <section class="content">
            <div class="container">

                <?php if( isset( $metadata['article_title'], $metadata['article_author'], $metadata['article_date'], $metadata['article_time'] ) ): ?>
                    <h2>--- metadata.article_title ---</h2>

                    <p><i>Authored by --- metadata.article_author --- on --- metadata.article_date --- at --- metadata.article_time ---.</i></p>
                <?php endif; ?>
                
                {{ content }}
            </div>
        </section>

        <footer>
            <div class="container">
                <p>Copyright &copy; Paula Whitefield. Developed using <a href="https://staticphp.softwayr.net" target="_blank">StaticPHP</a>. Source code is on <a href="https://github.com/PaulaWhitefield/PaulaWhitefield-Website" target="_blank">GitHub</a>.</p>
            </div>
        </footer>
    </body>
</html>
