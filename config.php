<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
 <a href="about-us.php">linking to the other page</a>
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
