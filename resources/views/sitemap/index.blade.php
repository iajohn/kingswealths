<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <sitemap>
        <url>
            <loc>{{ route('home') }}</loc>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    </sitemap>
    <sitemap>
        <url>
            <loc>{{ route('about') }}</loc>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    </sitemap>
    <sitemap>
        <url>
            <loc>{{ route('contact') }}</loc>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    </sitemap>
    <sitemap>
        <url>
            <loc>{{ route('services') }}</loc>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    </sitemap>
</sitemapindex>