<?php
// Site-wide settings and navigation. Edit here and every page updates.
$site = [
    'name'    => "Best Men's Mod",
    'tagline' => "Men's Tailor in Vazirabad, Nanded",
    'address' => 'Shop No. 11, Khandelwal Plaza, Vazirabad, Nanded, Maharashtra 431601',
    'phone'   => '+91 9860689224',
    'email'   => 'besttaylormensmod@gmail.com',
    'to_email'   => 'besttaylormensmod@gmail.com',
    'social'  => [
        ['icon' => 'fab fa-whatsapp',    'url' => 'https://wa.me/919860689224'],
        ['icon' => 'fab fa-facebook-f',  'url' => 'https://www.facebook.com/profile.php?id=61583155680009'],
        ['icon' => 'fab fa-instagram',   'url' => 'https://www.instagram.com/besttaylor.nanded'],
        ['icon' => 'fab fa-youtube',     'url' => 'https://www.youtube.com/@BestMensMod'],
    ],
];
// slug => [label, file, optional submenu]
$menu = [
    'home'     => ['label' => 'Home',     'url' => 'index.php'],
    'about'    => ['label' => 'About',    'url' => 'about.php'],
    'services' => ['label' => 'Services', 'url' => 'services.php'],
    'blog'     => ['label' => 'Blog',     'url' => 'blog.php'],
    'contact'  => ['label' => 'Contact',  'url' => 'contact.php'],
];

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
