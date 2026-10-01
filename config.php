<?php
// Site-wide settings and navigation. Edit here and every page updates.
$site = [
    'name'    => "Best Men's Mod",
    'tagline' => "Men's Tailor in Vazirabad, Nanded",
    'address' => 'Shop No. 11, Khandelwal Plaza, Vazirabad, Nanded, Maharashtra 431601',
    'phone'   => '+91 9860689224',
    'social'  => [
        ['icon' => 'fab fa-twitter',     'url' => '#'],
        ['icon' => 'fab fa-facebook-f',  'url' => 'https://bit.ly/sai4ull'],
        ['icon' => 'fab fa-pinterest-p', 'url' => '#'],
    ],
];

// slug => [label, file, optional submenu]
$menu = [
    'home'     => ['label' => 'Home',     'url' => 'index.php'],
    'about'    => ['label' => 'About',    'url' => 'about.php'],
    'services' => ['label' => 'Services', 'url' => 'services.php'],
    'blog'     => ['label' => 'Blog',     'url' => 'blog.php', 'submenu' => [
        ['label' => 'Blog',         'url' => 'blog.php'],
        ['label' => 'Blog Details', 'url' => 'blog_details.php'],
        ['label' => 'Elements',     'url' => 'elements.php'],
    ]],
    'contact'  => ['label' => 'Contact',  'url' => 'contact.php'],
];

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
