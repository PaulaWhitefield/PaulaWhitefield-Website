---
page_title: Blog
layout: src/_includes/base.php
---

<h2>My Blog</h2>
<p>My latest blog articles are here.</p>

--- loop( dir = "src/blog", sort = "descending" ) ---

    <h3><a href="--- loop.uri ---">--- loop.article_title ---</a></h3>

    <p><i>Authored by --- loop.article_author --- on --- loop.article_date --- at --- loop.article_time ---.</i></p>

    <p>--- loop.article_description ---</p>

--- endloop ---
