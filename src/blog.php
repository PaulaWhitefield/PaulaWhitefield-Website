---
page_title: Blog
current_nav_item: blog
layout: src/_includes/base.php
---

<h2>Blog</h2>
<p>Here is a list of blog entries where Paula writes about what is on her mind that she wants to share with the world.</p>

<hr>

<div class="blog-entries">
--- loop( dir = "src/blog", sort = "descending" ) ---
    <div class="blog-entry">
        <div class="title"><a href="--- loop.uri ---">--- loop.article_title ---</a></div>

        <div class="metadata">Authored by --- loop.article_author --- on --- loop.article_date --- at --- loop.article_time ---.</div>

        <div class="description">--- loop.article_description ---</div>
    </div>
--- endloop ---
</div>
