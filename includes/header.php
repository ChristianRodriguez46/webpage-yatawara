<?php
// Start session for CSRF + flash messages (safe to call multiple times)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

// Expect these to be set by the page before including header:
// $page_title (string), $page_css (array of paths relative to BASE_PATH), $page_js (array of paths)
$page_title = $page_title ?? '';
$page_css = $page_css ?? [];
$page_js = $page_js ?? [];
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?= e(page_title($page_title)); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Base styles -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>assets/css/base.css">

    <?php foreach ($page_css as $href): ?>
        <link rel="stylesheet" href="<?= BASE_PATH . ltrim($href, '/'); ?>">
    <?php endforeach; ?>

    <!-- Favicons (optional) -->
    <!-- <link rel="icon" href="<?= BASE_PATH ?>images/favicon.ico"> -->

</head>

<body class="preload">

    <header class="site-header">
        <div class="nav-wrap container">
            <a class="brand" href="<?= BASE_PATH ?>index.php">Anjana <span>Yatawara</span></a>

            <button class="nav-toggle" aria-controls="mainnav" aria-expanded="false" aria-label="Menu">
                <span class="bar"></span><span class="bar"></span><span class="bar"></span>
            </button>

            <nav id="mainnav" class="mainnav" aria-label="Primary">
                <ul>
                    <li class="<?= nav_active('/index.php') ?: nav_active('/') ?>"><a href="<?= BASE_PATH ?>">Home</a>
                    </li>
                    <li class="<?= nav_active('/about.php') ?>"><a href="<?= BASE_PATH ?>about.php">About</a></li>
                    <li class="<?= nav_active('/research.php') ?>"><a href="<?= BASE_PATH ?>research.php">Research</a>
                    </li>
                    <li
                        class="has-sub <?= nav_active('/teaching.php') || nav_active('/math2200/') || nav_active('/math3210/') ? 'active' : '' ?>">
                        <a href="<?= BASE_PATH ?>teaching.php">Teaching</a>
                        <ul class="submenu">
                            <li class="<?= nav_active('/math2200/') ?>"><a href="<?= BASE_PATH ?>math2200/">Math
                                    2200</a></li>
                            <li class="<?= nav_active('/math3210/') ?>"><a href="<?= BASE_PATH ?>math3210/">Math
                                    3210</a></li>
                        </ul>
                    </li>
                    <li class="<?= nav_active('/webapps.php') ?>"><a href="<?= BASE_PATH ?>webapps.php">Webapps</a></li>
                    <li class="<?= nav_active('/contact.php') ?>"><a href="<?= BASE_PATH ?>contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="page">