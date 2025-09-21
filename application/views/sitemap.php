<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'lead-management' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'project-management' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'about-us' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'policy' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'terms' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'faqs' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url().'contact-us' ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php foreach ($blog as $key => $post): ?>
        <url>
            <loc><?php echo base_url().'post/'.$post['slug'] ?></loc>
            <priority>0.5</priority>
            <changefreq>weekly</changefreq>
        </url>
    <?php endforeach ?>
</urlset>