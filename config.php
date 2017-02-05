<?php

return [
    /**
     * --------------------------------------------------------------------------
     * Enabling the blog generator
     * --------------------------------------------------------------------------
     *
     * When the blog generator is enabled, blade views in "source/_blog"
     * will be parsed to get blog posts data and generate blog
     * pagination views. Disable this option if you won't
     * have a blog to get a performance boost.
     *
     */

    'enableBlog' => true,

    /**
     * --------------------------------------------------------------------------
     * The number of posts in a page
     * --------------------------------------------------------------------------
     *
     * The number of posts to appear on every page in the blog pages.
     *
     */
    'postsPerPage' => 3,

    /**
     * --------------------------------------------------------------------------
     * The view used to display blog paginated pages
     * --------------------------------------------------------------------------
     *
     * This blade view will be used to generate the paginated list of
     * posts for the blog.
     *
     */

    'postsListView' => 'blog',

    /**
     * --------------------------------------------------------------------------
     * Custom variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the custom variables you'd like to be present in
     * the blade views.
     *
     */

    'siteName' => 'John Blackmore',
    'siteDescription' => 'Digital Marketer, Software Architect, PHP Developer & Laravel Advocate. Coffee Addict, Drone Enthusiast. Based in Taunton, UK. Available for Freelance Work.',
    'siteAuthor' => 'John Blackmore',
    'pageTitle' => 'John Blackmore',

    'twitter' => 'http://twitter.com/johnblackmore',
    'linkedIn' => 'https://uk.linkedin.com/in/johnblackmore',
    'instagram' => 'https://www.instagram.com/johnblackmore/',
    'github' => 'https://github.com/johnblackmore',
    'tumblr' => 'http://johnblackmore.tumblr.com',
    'googleMaps' => 'https://www.google.co.uk/maps/contrib/107800284443701381974/',
];