---
title: Blog
layout: "base.md"
---

## My Blog

My latest blog articles are here.

{% for article in collections.BlogArticle | reverse %}
  
  ### [{{ article.data.title }}]({{ article.url }})
  
  *Authored by {{ article.data.author }} on {{ article.data.date | postDate }} at {{ article.data.time }}.*
  
   {{ article.data.description }}
  
{% endfor %}