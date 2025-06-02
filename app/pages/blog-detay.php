<?php

$bloglar = loadJsonData('blog.json');
$bulundu = false;

foreach ($bloglar as $item) {
    if ($item['slug'] === $slug) {
        $bulundu = true;
        ?>
        <section class="container py-5">
            <h1 class="mb-4"><?= htmlspecialchars($item['title'][$lang]) ?></h1>
            <p><?= nl2br(htmlspecialchars($item['content'][$lang])) ?></p>
        </section>
        <?php
        break;
    }
}

if (!$bulundu) {
    include __DIR__ . '/404.php';
}
