---
page_title: About
current_nav_item: about
layout: src/_includes/base.php
---

<p style="text-align: center;"><img src="--- metadata.images_url ---/gifs/scotland-flag.gif" alt="Scotland Flag"></p>
<p style="text-align: center;"><img src="--- metadata.images_url ---/gifs/about-me.gif" alt="About Me"></p>

<p>My name is Paula Whitefield from Ayrshire, Scotland.</p>

<p>In my spare time, I like to chill and relax with either music or random videos online.</p>

<h3>Contact Me</h3>

<p><img src="--- metadata.images_url ---/gifs/at-sign.gif" style="vertical-align: middle;" alt="At (@) Sign">&nbsp;&nbsp;&nbsp;Say hello or send me a virtual hug by email.</p>

<p class="email_address">paula [dot] whitefield [at] themailbox [dot] net</p>

<p><img src="--- metadata.images_url ---/gifs/hugs-from-me.gif" style="max-width: 100%;" alt="Hugs from Me"></p>

<hr>

<div style="padding: 2rem 0;">
    <p><b>For the technically minded...</b></p>
    <p>I use a Static Site Generator called <a href="https://staticphp.softwayr.net" target="_blank">StaticPHP</a> to develop my site. Source code is available on <a href="https://github.com/PaulaWhitefield/PaulaWhitefield-Website" target="_blank">GitHub</a>.</p>
    <p>I'm not paid to mention the above names, I just think they are awesome. Links are non-affiliated, so I <b>do not</b> get any kickback for you clicking on them.</p>
</div>

<script>
    var email_addresses = document.getElementsByClassName( 'email_address' );
    
    for( let i = 0; i < email_addresses.length; i++ )
    {
        var the_email_address = email_addresses[ i ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

        email_addresses[ i ].innerHTML = '<a href="mailto:' + the_email_address + '" target="_blank">' + the_email_address + '</a>';
    }
</script>
