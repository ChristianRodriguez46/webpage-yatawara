<?php
function page_title(string $title = ''): string
{
    $site = SITE_NAME;
    return $title ? "$title | $site" : $site;
}

// Returns 'active' if the current URL contains a slug (for nav highlighting)
function nav_active(string $slug): string
{
    $req = $_SERVER['REQUEST_URI'] ?? '';
    return (strpos($req, $slug) !== false) ? 'active' : '';
}

// Simple escaper for output
function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
