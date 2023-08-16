---
title: Blog
layout: "base.md"
tags: MainPage
permalink: "blog.html"
---

## My Blog

My latest blog articles are here.

{% for article in collections.BlogArticle %}
  
  ### [{{ article.data.title }}]({{ article.url }})
  
  *Published by {{ article.data.author }}.*
  
  {{ article.data.description }}
  
{% endfor %}