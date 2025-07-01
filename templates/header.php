<?php

$langFile = __DIR__ . '/../data/lang/' . $lang . '.json';
$langData = json_decode(file_get_contents($langFile), true);
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

$menu = [
    'home' => '',
    'about' => 'hakkimizda',
    'services' => 'faaliyet-alanlari',
    'team' => 'ekip',
    'blog' => 'blog',
    'career' => 'kariyer',
    'contact' => 'iletisim',
    'faq' => 'sss'
];

$currentUrl = '/' . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<nav id="mainNav" class="navbar sticky-top border-bottom shadow-sm">
    <div class="container d-flex align-items-center justify-content-between py-2">

        <!-- Hamburger Buton -->
        <div class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <i class="bi bi-list fs-3 lh-1 text-white"></i>
        </div>

        <!-- Logo -->
        <a href="/?lang=<?= $lang ?>" class="brand-logo d-flex justify-content-center align-items-center">
            <img src="/assets/img/amblem.png" alt="Kırat Hukuk">
        </a>

        <!-- Sağdaki Butonlar -->
        <div class="d-flex align-items-center gap-3">
            <div class="d-none d-lg-block text-light">
                <i class="bi bi-telephone fs-5 align-middle"></i> 0542 574 54 79
            </div>
            <button id="themeToggle" class="btn btn-sm btn-primary" title="Renk Modu">
                <i class="bi bi-sun"></i>
            </button>
            <a href="?lang=<?= $lang === 'tr' ? 'en' : 'tr' ?>"
               class="text-decoration-none fw-medium lang-toggle k-yellow">
                <?= strtoupper($lang === 'tr' ? 'EN' : 'TR') ?>
            </a>
        </div>

    </div>
</nav>


<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <img src="/assets/img/amblem.png" alt="Kırat Hukuk" width="60">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Kapat"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="nav flex-column" id="mainMenu">
            <?php
            foreach ($menu as $key => $path):
                $isActive = ($segments[0] === $path) ? 'active' : '';
                $url = ($path === '') ? "/?lang=$lang" : "/$path?lang=$lang";
                ?>
                <a class="nav-link px-2 fw-medium link-body-emphasis <?= $isActive ?>" href="<?= $url ?>">
                    <?= htmlspecialchars($langData['menu'][$key]) ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
</div>

<main>
