<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/assets/css/markdown.css">

# [Paula Whitefield](/)
**_Personal Website_**

---

{% for MenuPage in collections.MainPage %} [{{ MenuPage.data.title }}]({{ MenuPage.url }}) {% endfor %}

---

{{ content }}

---

Site by [Paula Whitefield](/). Static Site Generator by [11ty](https://11ty.dev/). Hosting by [CloudFlare Pages](https://pages.cloudflare.com/).