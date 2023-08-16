<?php

$page_title = "Blog";

$page_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "config.php";
?>

<h2>My Blog</h2>

<?php

$root_path_to_blog_articles = __DIR__ . DIRECTORY_SEPARATOR . "blog";

$blog_articles = array();

function get_blog_articles( String $path_to_blog_articles, &$blog_articles, $root_path_to_blog_articles )
{
    $dir_items = scandir( $path_to_blog_articles );

    foreach( $dir_items as $dir_item )
    {
        if( $dir_item == "." || $dir_item == ".." )
            continue;
        
        $path_to_dir_item = $path_to_blog_articles . DIRECTORY_SEPARATOR . $dir_item;

        if( is_dir( $path_to_dir_item ) )
        {
            get_blog_articles( $path_to_dir_item, $blog_articles, $root_path_to_blog_articles );
            continue;
        }

        if( ! is_file( $path_to_dir_item ) || substr( $dir_item, -4 ) != ".php" )
            continue;
        
        include $path_to_dir_item;

        if( ! isset( $article_title, $article_date, $article_time, $article_description, $article_author ) )
            continue;
        
        $article['title'] = $article_title;
        $article['date'] = $article_date;
        $article['time'] = $article_time;
        $article['description'] = $article_description;
        $article['author'] = $article_author;
        $article['permalink'] = "/blog/" . str_replace( array( "\\", ".php" ), "/", substr( $path_to_dir_item, strlen( $root_path_to_blog_articles ) + 1 ) );

        $blog_articles[] = $article;
    }
}

get_blog_articles( $root_path_to_blog_articles, $blog_articles, $root_path_to_blog_articles );

$blog_articles = array_reverse( $blog_articles );

?>

<?php if( count( $blog_articles ) > 0 ): ?>
    <p>My latest blog articles are here.</p>
<?php endif; ?>

<?php foreach( $blog_articles as $blog_article ): ?>
    
    <h3><a href="<?php echo $blog_article['permalink']; ?>"><?php echo $blog_article['title']; ?></a></h3>
    
    <p><i>Authored by <?php echo $blog_article['author']; ?> on <?php echo date( $blog_datetime_format, strtotime( $blog_article['date'] . " " . $blog_article['time'] ) ); ?>.</i></p>
    
    <p><?php echo $blog_article['description']; ?></p>
    
<?php endforeach; ?>

<?php if( count( $blog_articles ) == 0 ): ?>

    <p>Looks like I haven't written anything yet. Please check back later. :)</p>

<?php endif; ?>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
