<?php

$langFile = __DIR__ . '/../data/lang/' . $lang . '.json';
$langData = json_decode(file_get_contents($langFile), true);
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

$menu = [
    'home'    => '',
    'about'   => 'hakkimizda',
    'services'=> 'faaliyet-alanlari',
    'team'    => 'ekip',
    'blog'    => 'blog',
    'career'  => 'kariyer',
    'contact' => 'iletisim',
    'faq'     => 'sss'
];

$currentUrl = '/' . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<div class="bg-white border-bottom shadow-sm fixed-top">
    <div class="container d-flex align-items-center justify-content-between py-2">
        <button class="btn p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <i class="bi bi-list" style="font-size: 1.8rem;"></i>
        </button>
        <a href="/?lang=<?= $lang ?>" class="text-decoration-none fw-bold text-dark fs-5">KIRAT HUKUK</a>
        <div class="d-flex align-items-center gap-3">
            <button id="themeToggle" class="btn btn-sm btn-outline-secondary" title="Tema değiştir">
                <i class="bi bi-sun"></i>
            </button>
            <a href="?lang=<?= $lang === 'tr' ? 'en' : 'tr' ?>" class="text-decoration-none fw-medium lang-toggle">
                <?= strtoupper($lang === 'tr' ? 'EN' : 'TR') ?>
            </a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menü</h5>
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

<main class="pt-5">
