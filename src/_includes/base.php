<?php include __DIR__ . DIRECTORY_SEPARATOR . "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ): echo $page_title . " - "; endif; echo $site_title; ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo $fonts_url; ?>/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">

        <style type="text/css">
            body { background-image: url( '<?php echo $images_url; ?>/gifs/colorful-shining-stars.gif' ); }
            hr { background-image: url( '<?php echo $images_url; ?>/gifs/twinkling-blue-stars-line.gif' ); }
        </style>
    </head>
    
    <body>
        <div class="header">
            <div class="logo">
                <img src="<?php echo $images_url; ?>/gifs/purple-flower.gif">
            </div>

            <div class="title">
                <h1><a href="/"><?php echo $site_title; ?></a></h1>
                <p><b><i><?php echo $site_tagline; ?></i></b></p>
            </div>
        </div>

        <hr>

        <p class="navbar">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/blog">Blog</a>
        </p>

        <hr>

        <?php
        
        if( isset( $article_title, $article_author, $article_date, $article_time, $article_content ) )
            $page_content( $article_title, $article_author, $article_date, $article_time, $article_content );
        else
            $page_content();
        
        ?>
    
        <hr>
    
        <p style="text-align: center;">Site by <a href="<?php echo $site_author_url; ?>"><?php echo $site_author; ?></a>.</p>
    </body>
</html>
